<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\EditEventRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Str;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller{

    private $folder = 'images/events';

    function list(){
        $events = Event::where('status', true)->orderBy('startdate', 'desc')->paginate(env('PAGINATION_COUNT'));
        return Response::view('events.index', [
            'events' => $events,
            'siteName' => env('SITE_NAME')
        ]);
    }

    function show($slug){
        if(!$event = Event::where('status', true)->where('slug', $slug)->first()) abort(404, "Event Not Found");
        $next = Event::where('status', true)->where('startdate', '>', $event->startdate)->orderBy('startdate', 'desc')->first();
        $previous = Event::where('status', true)->where('startdate', '<', $event->startdate)->orderBy('startdate', 'desc')->first();

        return Response::view('events.event-details', [
            'event' => $event,
            'next' => $next,
            'previous' => $previous,
            'siteName' => env('SITE_NAME')
        ]);
    }

    function all(){
        $events = Event::paginate();
        return Response::view('admin.events.events', [
            'events' => $events
        ]);
    }

    function new(){
        return Response::view('admin.events.create-event');
    }

    function edit($id){
        $event = Event::findOrFail($id);
        return Response::view('admin.events.edit-event', [
            'event' => $event
        ]);
    }

    public function create(CreateEventRequest $request){
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->title);
        $slug = Str::slug($request->title);
        Event::create($request->safe()->merge(['image' => $image, 'slug' => $slug])->all());
        return Response::redirectBack('success', 'Event Created');
    }

    public function status($id){
        $event = Event::findOrFail($id);
        $event->status = !$event->status;
        $event->save();
        $status = $event->status ? 'Published' : 'Unpublished';

        return Response::redirectBack('success', "Event $status");
    }

    public function update(EditEventRequest $request, $id){
        $event = Event::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->title, $event->image)
                    : $event->image;
        $values = collect($request->validated())->merge(['image' => $image]);
        $event->update($values->all());
        return Response::redirectBack('success', "Event Updated");
    }

    public function destroy($id){
        $event = Event::findOrFail($id);
        FileHandler::deleteFile($event->image);
        $event->delete();
        return Response::redirectBack('success', 'Event Deleted');
    }
}
