<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Thsis metod will show dashboard page for customier
    public function dashboard(){
        return view('dashboard');
    }

     

}



 