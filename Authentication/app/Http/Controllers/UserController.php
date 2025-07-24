<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
         $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
         ]);  

         $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => bcrypt($data['password']),
         ]);

         return redirect()->back()->with('success', 'User registered successfully!');
    }
   
    public function login(Request $request){
        $credentials = $request->validate([
            'email' =>  'required|email',
            'password' => 'required|confirmed',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
    }

    public function dashboardPage(){
        if(Auth::check()){
            return view('dashboard');
        }else{
            return redirect()->route('login');
        }
    

    public function inner(){
        if(Auth::check()){
            return view('inner');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(){
      Auth::logout();                      
      return view('login');       
    }
    
}  


