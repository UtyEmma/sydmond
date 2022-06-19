<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Response;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller{

    function index(){
        $content = Content::find(1);
        // dd($content);
        return Response::view('admin.contents', [
            'content' => $content
        ]);
    }

    function update(Request $request){
        $content = Content::first();

        if($content){
            $content->update([
                'vision' => $request->vision ?? $content->vision,
                'goal' => $request->goal ?? $content->goal,
                'objectives' => $request->objectives ?? $content->objectives,
                'mission' => $request->mission ?? $content->mission,
                'about' => $request->about ?? $content->about,
                'history' => $request->history ?? $content->history,
            ]);
        }else{
            Content::create([
                'vision' => $request->vision,
                'goal' => $request->goal,
                'objectives' => $request->objectives,
                'mission' => $request->mission,
                'about' => $request->about,
                'history' => $request->history,
            ]);
        }


        return Response::redirectBack('success', 'Content Created');
    }

}
