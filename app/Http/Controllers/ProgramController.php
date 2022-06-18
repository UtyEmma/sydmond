<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramsRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Str;
use App\Models\Program;

class ProgramController extends Controller{

    private $folder = 'images/programs';

    function show($slug){
        $program = Program::where('slug', $slug)->first();

        return Response::view('programs', [
            'siteName' => env('SITE_NAME'),
            'program' => $program
        ]);
    }

    function index(){
        $programs = Program::paginate();

        return Response::view('admin.programs.programs', [
            'programs' => $programs
        ]);
    }

    function new(){
        return Response::view('admin.programs.create-program');
    }

    public function create(ProgramsRequest $request){
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->title);
        $slug = Str::slug($request->title);
        $values = collect($request->validated())->merge(['image' => $image, 'slug' => $slug]);
        Program::create($values->all());
        return Response::redirectBack('success', 'Program Created');
    }

    public function status($id){
        $benefit = Program::findOrFail($id);
        $benefit->status = !$benefit->status;
        $benefit->save();
        $status = $benefit->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Program $status");
    }

    public function update(ProgramsRequest $request, $id){
        $benefit = Program::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->title, $benefit->image)
                    : $benefit->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $benefit->update($values->all());
        return Response::redirectBack('success', "Program Updated");
    }

    public function destroy($id){
        $benefit = Program::findOrFail($id);
        FileHandler::deleteFile($benefit->image);
        $benefit->delete();
        return Response::redirectBack('success', 'Program Deleted');
    }
}
