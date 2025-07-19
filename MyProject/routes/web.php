<?php

use App\Http\Controllers\website\WebsiteController;
use Illuminate\Support\Facades\Route;

// Website 
Route::get('/', [WebsiteController::class, 'index']);

Route::get('/courses', [WebsiteController::class, 'courses']);

Route::get('/projects', [WebsiteController::class, 'projects']);

Route::get('/blogs', [WebsiteController::class, 'blogs']);

Route::get('/contact', [WebsiteController::class, 'contact']);


// Student
Route::get('/student/login', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('welcome');
});
Route::get('/dashboard/courses', function () {
    return view('welcome');
});
Route::get('/dashboard/projects', function () {
    return view('welcome');
});
Route::get('/dashboard/blogs', function () {
    return view('welcome');
});
Route::get('/dashboard/settings', function () {
    return view('welcome');
});
