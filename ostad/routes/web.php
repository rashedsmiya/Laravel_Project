<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'homePage'])->name('homePage');