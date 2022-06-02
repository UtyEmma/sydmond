<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Response;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller{

    function index(){
        $content = Content::find(1);
        return Response::view('admin.contents', [
            'content' => $content
        ]);
    }

    function update(Request $request){
        $content = Content::first();

        dd($request->all());

        if($content){
            $content->update([
                'vision' => $request->vision ?? $content->vision,
                'goal' => $request->goal ?? $content->goal,
                'objectives' => $request->objectives ?? $content->objectives,
            ]);
        }else{
            Content::create([
                'vision' => $request->vision,
                'goal' => $request->goal,
                'objectives' => $request->objectives,
            ]);
        }


        return Response::redirectBack('success', 'Content Created');
    }

}
