<?php

namespace App\Http\Controllers;

use App\Library\Response;
use App\Models\Content;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Program;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller{

    function index(){
        $programs = Program::limit(6)->get();
        $posts = Post::limit(4)->get();
        $content = Content::first();
        $testimonials = Testimonial::where('status', true)->limit(4)->get();
        $events = Event::where('status', true)->limit(3)->get();

        return Response::view('home', [
            'programs' => $programs,
            'content' => $content,
            'posts' => $posts,
            'testimonials' => $testimonials,
            'events' => $events
        ]);
    }

    function about(){
        $about = Content::first();
        $team = Team::where('type', 'management')->get();

        return Response::view('about', [
            'about' => $about,
            'team' => $team
        ]);
    }

    function faqs(){
        $faqs = Faq::all();
        return Response::view('faq', [
            'faqs' => $faqs
        ]);
    }

    function gallery(){
        $gallery = Gallery::paginate(6);
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

    function contact(){
        return Response::view('contact', [

        ]);
    }

}
