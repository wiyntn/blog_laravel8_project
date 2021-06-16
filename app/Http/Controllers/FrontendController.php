<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller{


    public function home(){

        $title="Home";
        return view('home',compact('title'));
    }

    public function about(){

        $title="About";
        return view('about',compact('title'));
    }

    public function contact(){

        $title="Contact";
        return view('contact',compact('title'));
    }

    public function services(){

        $title="Services";
        return view('services',compact('title'));
    }

    public function blogs(){

        $title="Blogs";
        return view('blogs',compact('title'));
    }

    public function video_gallery(){

        $title="Video_Gallery";
        return view('video_gallery',compact('title'));
    }

    public function photo_gallery(){

        $title="Photo_Gallery";
        return view('photo_gallery',compact('title'));
    }

    public function projects(){

        $title="Projects";
        return view('projects',compact('title'));
    }



}
