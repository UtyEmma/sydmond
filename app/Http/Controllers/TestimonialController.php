<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Token;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller{

    private $folder = 'images/team';

    function index(){
        $teams = Testimonial::paginate();
        return Response::view('admin.testimonials', [
            'testimonials' => $teams
        ]);
    }

    public function create(TestimonialRequest $request){
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->name);
        // dd($request->validated());
        $values = collect($request->validated())->merge(['image' => $image]);
        Testimonial::create($values->all());
        return Response::redirectBack('success', 'Testimonial Created');
    }

    public function status($id){
        $team_member = Testimonial::findOrFail($id);
        $team_member->status = !$team_member->status;
        $team_member->save();
        $status = $team_member->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Testimonial $status");
    }

    public function update(TestimonialRequest $request, $id){
        $team_member = Testimonial::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->name, $team_member->image)
                    : $team_member->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $team_member->update($values->all());
        return Response::redirectBack('success', "Testimonial Info Updated");
    }

    public function destroy($id){
        $team = Testimonial::findOrFail($id);
        FileHandler::deleteFile($team->image);
        $team->delete();
        return Response::redirectBack('success', 'Testimonial Deleted');
    }

}
