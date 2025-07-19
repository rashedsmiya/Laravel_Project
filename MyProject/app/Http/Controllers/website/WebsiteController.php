<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home');
    }
    public function courses(){
        return view('website.courses');
    }

    public function projects(){
        return view('website.projects');
    }

    public function blogs(){
        return view('website.blogs');
    }

    public function contact(){
        return view('website.contact');
    }
    
}
