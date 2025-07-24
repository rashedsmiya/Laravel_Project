<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function laravelResponse(){
        // return "Hello Laravel";
        // Set
        // return response('Cooki Set')->cookie('user_section', '12345', 60);
        // return response()->json(['cookie'=>'user_session', 'value'=>'12345',60]);
        // return  response()->cookie('user_session','12345');
        // return response()->json(['Cookie' => $request]);
    }

    // function getCookie(Request $request){
    //     return $request->cookie('user_section');
    // }

    
    
}
