<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MembersBenefitRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Token;
use App\Models\MembersBenefit;
use Illuminate\Http\Request;

class MembersBenefitController extends Controller{

    private $folder = 'images/benefits';

    function index(){
        $benefits = MembersBenefit::paginate();
        return Response::view('admin.benefits', [
            'benefits' => $benefits
        ]);
    }

    public function create(MembersBenefitRequest $request){
        $unique_id = Token::unique('members_benefits');
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->name);
        $values = collect($request->validated())->merge(['unique_id' => $unique_id, 'image' => $image]);
        MembersBenefit::create($values->all());
        return Response::redirectBack('success', 'FAQ Created');
    }

    public function status($id){
        $benefit = MembersBenefit::findOrFail($id);
        $benefit->status = !$benefit->status;
        $benefit->save();
        $status = $benefit->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Team Member $status");
    }

    public function update(MembersBenefitRequest $request, $id){
        $benefit = MembersBenefit::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->name, $benefit->image)
                    : $benefit->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $benefit->update($values->all());
        return Response::redirectBack('success', "Team Member Info Updated");
    }

    public function destroy($id){
        $benefit = MembersBenefit::findOrFail($id);
        FileHandler::deleteFile($benefit->image);
        $benefit->delete();
        return Response::redirectBack('success', 'Team Member Deleted');
    }
}
