<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class SiteController extends Controller
{         
    public function homePage(){
        $user = "Editor";
        $pageTitle = "Home Page";
        $person = [
            'this is post 1',
            'this is post 2',
            'this is post 3',
            'this is post 4',
            'this is post 5',
            'this is post 6',
            'this is post 7',
            'this is post 8',
            'this is post 9',
            'this is post 10',
            'this is post 11',
            'this is post 12',
            'this is post 13',
            'this is post 14',
            'this is post 15',
            'this is post 16',                                                                  
        ];

        return view('home', [
            'user' => $user,
            'pageTitle' => $pageTitle,
            'person' => $person
        ]);
    }   
        
 
}

