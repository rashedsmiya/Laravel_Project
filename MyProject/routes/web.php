<?php

use Illuminate\Support\Facades\Route;

// Website 
Route::get('/', function () {
    return view('website.home');
});

Route::get('/course', function () {
    return view('website.course');
});

Route::get('/projects', function () {
    return view('website.projects');
});

Route::get('/contact', function () {
    return view('website.projects');
});

Route::get('/projects', function () {
    return view('website');
});

Route::get('/blogs', function () {
    return view('website.blogs');
});

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
