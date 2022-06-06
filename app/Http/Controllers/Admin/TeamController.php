<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTeamMemberRequest;
use App\Http\Requests\UpdateTeamMemberRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Token;
use App\Models\Team;

class TeamController extends Controller{

    private $folder = 'images/team';

    function index(){
        $teams = Team::paginate();
        return Response::view('admin.management.team', [
            'teams' => $teams
        ]);
    }

    public function create(CreateTeamMemberRequest $request){
        $unique_id = Token::unique('teams');
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->name);
        // dd($request->validated());
        $values = collect($request->validated())->merge(['unique_id' => $unique_id, 'image' => $image]);
        Team::create($values->all());
        return Response::redirectBack('success', 'FAQ Created');
    }

    public function status($id){
        $team_member = Team::findOrFail($id);
        $team_member->status = !$team_member->status;
        $team_member->save();
        $status = $team_member->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Team Member $status");
    }

    public function update(CreateTeamMemberRequest $request, $id){
        $team_member = Team::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->name, $team_member->image)
                    : $team_member->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $team_member->update($values->all());
        return Response::redirectBack('success', "Team Member Info Updated");
    }

    public function destroy($id){
        $gallery = Team::findOrFail($id);
        FileHandler::deleteFile($gallery->image);
        $gallery->delete();
        return Response::redirectBack('success', 'Team Member Deleted');
    }

}
