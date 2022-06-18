<?php

namespace App\Http\Controllers;

use App\Library\Response;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller{

    function index(){
        return Response::view('home');
    }

    function about(){
        $about = Content::first();
        return Response::view('about', [
            'about' => $about
        ]);
    }

    function faqs(){
        $faqs = Faq::all();
        return Response::view('faq', [
            'faqs' => $faqs
        ]);
    }

    function gallery(){
        $gallery = Gallery::all();
        return Response::view('gallery', [
            'gallery' => $gallery,
            'siteName' => env('SITE_NAME')
        ]);
    }

    function team(){
        $team = Team::all();
        return Response::view('team', [
            'team' => $team
        ]);
    }

}
