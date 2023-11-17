<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function () {


        Route::get('/', [HomeController::class, 'index'])->middleware('auth:admin')->name('dashboard');

        Route::get('/login', [LoginController::class, 'showFormLogin'])->middleware('guest:admin')->name('login');

        Route::post('/login', [LoginController::class, 'login'])->middleware('guest:admin')->name('postLogin');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('/logout', [LoginController::class, 'logout']);

        Route::get('/edit/{admin}', [AdminController::class, 'viewProfile'])->middleware('auth:admin')->name('view-profile');

        Route::post('/edit/{admin}', [AdminController::class, 'editProfile'])->middleware('auth:admin')->name('edit-profile');


        Route::prefix('user')->middleware('auth:admin')->name('user.')->group(function () {
                Route::get('/add', [UserController::class, 'add'])->name('add');
              
                Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');
              
                Route::get('/list', [UserController::class, 'listUser'])->name('list');
              
                Route::get('/profile/{user}', [UserController::class, 'profile'])->name('profile');
              
                Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
              
                Route::post('/edit/{user}', [UserController::class, 'postedit'])->name('post-edit');
              
                Route::get('/delete/{user}', [UserController::class, 'delete'])->name('delete');
              
                Route::get('/forceDelete/{id}', [UserController::class, 'forceDelete'])->name('force-delete');
              
                Route::get('/restore/{id}', [UserController::class, 'restore'])->name('restore');
              
                Route::post('/delete-multiple', [UserController::class, 'deleteMultiple'])->name('delete-multiple');
              
                Route::match(['get', 'post'],'/find-user', [UserController::class, 'findUser'])->name('find-user');
              });
        
        
        Route::prefix('category')->middleware('auth:admin')->name('category.')->group(function () {
                Route::get('/add', [CategoryController::class, 'add'])->name('add');

                Route::post('/add', [CategoryController::class, 'postAdd'])->name('post-add');

                Route::get('/list', [CategoryController::class, 'listCategory'])->name('list');

                Route::get('/view/{category}', [CategoryController::class, 'view'])->name('view');

                Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');

                Route::post('/edit/{category}', [CategoryController::class, 'postedit'])->name('post-edit');

                Route::get('/delete/{category}', [CategoryController::class, 'delete'])->name('delete');

                Route::match(['get', 'post'],'/find-category', [CategoryController::class, 'findCategory'])->name('find-category');
        });
});
