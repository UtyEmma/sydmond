<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberCategoryRequest;
use App\Library\Response;
use App\Models\MemberCategory;
use Illuminate\Http\Request;

class MemberCategoryController extends Controller{

    function index(){
        $categories = MemberCategory::paginate();
        return Response::view('admin.member-category', [
            'categories' => $categories
        ]);
    }

    public function create(MemberCategoryRequest $request){
        MemberCategory::create($request->validated());
        return Response::redirectBack('success', 'Member Category Created');
    }

    public function status($id){
        $category = MemberCategory::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        $status = $category->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Member Category $status");
    }

    public function update(MemberCategoryRequest $request, $id){
        $benefit = MemberCategory::findOrFail($id);
        $values = collect($request->validated());
        $benefit->update($values->all());
        return Response::redirectBack('success', "Member Category Updated");
    }

    public function destroy($id){
        $category = MemberCategory::findOrFail($id);
        $category->delete();
        return Response::redirectBack('success', 'Member Catergory Deleted');
    }

}
