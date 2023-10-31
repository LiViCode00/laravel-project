<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home' , [HomeController::class,'index'])->name('home');
Route::get('/' , [HomeController::class,'index'])->name('home');

Route::get('/login' , function(){
    return view('pages.client.login');
})->name('login');

Route::get('/register' , function(){
    return view('pages.client.register');
})->name('register');

Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/', [CourseController::class,'index'])->name('view');
    Route::get('/course-detail' , [CourseController::class,'courseDetail'])->name('courseDetail');
});

Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('/', [TeacherController::class,'index'])->name('view');
    Route::get('/teachers-detail' , [TeacherController::class,'teacherDetail'])->name('teacherDetail');
});

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostController::class,'index'])->name('view');
    Route::get('/posts-detail' , [PostController::class,'postDetail'])->name('postDetail');
});


