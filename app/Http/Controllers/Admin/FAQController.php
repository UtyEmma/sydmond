<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FAQRequest;
use App\Library\Response;
use App\Library\Token;
use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller{

    function create(FAQRequest $request){
        try {
            $unique_id = Token::unique('faqs');
            $values = collect($request->validated())->merge(['unique_id' => $unique_id]);
            Faq::create($values->all());
            return Response::redirectBack('success', 'FAQ Created');
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    function show(){
        try {
            $faqs = Faq::paginate();
            return Response::view('admin.faqs.create-faq', [
                'faqs' => $faqs
            ]);
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    function edit($id){
        try {
            $faqs = Faq::paginate();
            $faq = Faq::findOrFail($id);
            return Response::view('admin.faqs.edit-faq', [
                'faqs' => $faqs,
                'faq' => $faq
            ]);
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    function update(FAQRequest $request, $id){
        try {
            $faq = Faq::findOrFail($id);
            $faq->update($request->validated());

            return Response::redirectBack('success', "FAQ Updated");
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    function delete($id){
        try {
            Faq::findOrFail($id)->delete();
            return Response::redirectBack('success', 'FAQ Deleted');
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    function status($id){
        try {
            $faq = Faq::findOrFail($id);
            $faq->status = !$faq->status;
            $faq->save();
            $status = $faq->status ? 'Enabled' : 'Disabled';

            return Response::redirectBack('success', "FAQ $status");
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

}
