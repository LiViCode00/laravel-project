<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



   Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->middleware('auth:admin')->name('dashboard');
    Route::get('/login', [LoginController::class, 'showFormLogin'])->middleware('guest:admin')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->middleware('guest:admin')->name('postLogin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/edit/{admin}' , [AdminController::class,'viewProfile'])->name('view-profile');
    Route::post('/edit/{admin}' , [AdminController::class,'editProfile'])->name('edit-profile');


    Route::prefix('user')->name('user.')->group(function () {
            Route::get('/add',[UserController::class,'add'])->name('add');
            Route::post('/add',[UserController::class,'postAdd'])->name('post-add');
            Route::get('/list',[UserController::class,'listUser'])->name('list');
            Route::get('/profile/{user}' , [UserController::class,'profile'])->name('profile');
            Route::get('/edit/{user}' , [UserController::class,'edit'])->name('edit');
            Route::post('/edit/{user}' , [UserController::class,'postedit'])->name('post-edit');
    });
  
   });
    
    

