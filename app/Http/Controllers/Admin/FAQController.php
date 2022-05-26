<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Response;
use App\Library\Token;
use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller{

    function create(Request $request){
        try {
            $unique_id = Token::unique('faqs');
            Faq::create($request->validated())->merge(['unique_id' => $unique_id]);
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    function show(){

    }

}
