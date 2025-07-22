<?php

 
// app/Http/Controllers/TestViewController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    public function test()
    {
        return view('test');
    }
}
 