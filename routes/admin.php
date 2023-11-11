<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



   Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->middleware('auth:admin')->name('dashboard');
    Route::get('/login', [LoginController::class, 'showFormLogin'])->middleware('guest:admin')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->middleware('guest:admin')->name('postLogin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/edit/{admin}' , [AdminController::class,'viewProfile'])->name('view-profile');
    Route::post('/edit/{admin}' , [AdminController::class,'editProfile'])->name('edit-profile');
  
   });
    
    

