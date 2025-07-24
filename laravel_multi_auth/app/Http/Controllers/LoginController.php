<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    // This method will show login page form customer
    public function index(){
        return view('login');
    }

    // This method will authenticate user
    public function authenticate(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->passes()){
            
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                
            } else{
                return redirect()->route('account.login')->with('Either Email or password is incorrect');
            }
            
        } else{
            return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
        }
    }
    public function register(){
         
        return view('register');
    }
    
    public function processRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        
        if($validator->passes()){

            $user = new User();
            $user->name = $request->naem;
            $user->password = Hash::make($request->password);
            $user->role = 'customer';
            $user->save();

            return redirect()->route('account.login')->with('message', 'Registration successful');

        } else{
            return redirect()->route('account.register')
            ->withInput()
            ->withErrors($validator);
        }
    }
}


