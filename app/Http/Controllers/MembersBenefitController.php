<?php

namespace App\Http\Controllers;

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
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->title);
        $values = collect($request->validated())->merge(['image' => $image]);
        MembersBenefit::create($values->all());
        return Response::redirectBack('success', 'Member Benefit Created');
    }

    public function status($id){
        $benefit = MembersBenefit::findOrFail($id);
        $benefit->status = !$benefit->status;
        $benefit->save();
        $status = $benefit->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Member Benefit $status");
    }

    public function update(MembersBenefitRequest $request, $id){
        $benefit = MembersBenefit::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->title, $benefit->image)
                    : $benefit->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $benefit->update($values->all());
        return Response::redirectBack('success', "Member Benefit Updated");
    }

    public function destroy($id){
        $benefit = MembersBenefit::findOrFail($id);
        FileHandler::deleteFile($benefit->image);
        $benefit->delete();
        return Response::redirectBack('success', 'Member Benefit Deleted');
    }

    public function list(){
        $benefits = MembersBenefit::where('status', true)->get();
        return Response::view('member-benefits', [
            'siteName' => env('APP_NAME'),
            'benefits' => $benefits
        ]);
    }
}
