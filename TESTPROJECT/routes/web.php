<?php

use App\Http\Controllers\TestViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/test', [TestViewController::class, 'test'])->name('test-view'); 
Route::get('/category', [CategoryController::class, 'index'])->name('test-view'); 

