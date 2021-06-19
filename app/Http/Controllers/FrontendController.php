<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller{


    public function home(){

        $title="Home";
        $menu="home";
        return view('home',compact('title','menu'));
    }

    public function about(){

        $title="About";
        $menu="about";
        return view('about',compact('title','menu'));
    }

    // public function contact(){

    //     $title="Contact";
    //     $menu="contact";
    //     return view('contact',compact('title','menu'));
    // }

    public function services(){

        $title="Services";
        $menu="services";
        return view('services',compact('title','menu'));
    }

    public function blogs(){

        $title="Blogs";
        $menu="blogs";
        return view('blogs',compact('title','menu'));
    }

    public function video_gallery(){

        $title="Video_Gallery";
        $menu="video_gallery";
        return view('video_gallery',compact('title','menu'));
    }

    public function photo_gallery(){

        $title="Photo_Gallery";
        $menu="photo_gallery";
        return view('photo_gallery',compact('title','menu'));
    }

    public function projects(){

        $title="Projects";
        $menu="projects";
        return view('projects',compact('title','menu'));
    }



}
