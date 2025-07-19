<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');  
Route::post('admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');  
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');  
Route::get('admin/form', [AdminController::class, 'form'])->name('admin.form');  
Route::get('admin/table', [AdminController::class, 'table'])->name('admin.table');  