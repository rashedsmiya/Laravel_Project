<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AcademicYearController;
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});  
=======
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });  
>>>>>>> 35e56007ded3b65eff3118c82182e6babf530427

Route::group(['prefix'=>'admin'],function(){

    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::get('login', [AdminController::class, 'index'])->name('admin.login');   
    Route::get('register', [AdminController::class, 'register'])->name('admin.register');  
    Route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate'); 
            
});

Route::group(['middleware'=>['admin.auth']],function(){
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout'); 
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');  
    Route::get('form', [AdminController::class, 'form'])->name('admin.form');  
    Route::get('table', [AdminController::class, 'table'])->name('admin.table');   
    Route::get('academic-year/create', [AcademicYearController::class, 'index'])->name('academic-year.create');   
});

 

                    