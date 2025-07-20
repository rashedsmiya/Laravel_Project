<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class SiteController extends Controller
{   
    public function homePage(){
        $user = "Editor";
        $page_name = 'Home';
        return view('home',[
            'page_name' => $page_name,
            'user' => $user
        ]);
    }
}

