<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\OrderController as UserOrderController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;


use App\Http\Controllers\PaginationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [StudentController::class, 'showFormLogin'])->name('login');

Route::post('/login', [StudentController::class, 'login'])->name('post-login');

Route::get('/register', [StudentController::class, 'showFormRegister'])->name('register');

Route::post('/register', [StudentController::class, 'register'])->name('post-register');

Route::post('/logout', [StudentController::class, 'logout'])->name('logout');

Route::get('/logout', [StudentController::class, 'logout']);


Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('/search_product', [SearchController::class, 'search_product'])->name('search');

Route::get('/login', function () {
    return view('pages.client.login');
})->name('login');


Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('view');
    Route::get('/course-detail/{id}', [CourseController::class, 'courseDetail'])->name('courseDetail');
});

Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('view');
    Route::get('/teachers-detail/{id}', [TeacherController::class, 'teacherDetail'])->name('teacherDetail');
});

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('view');
    Route::get('/posts-detail/{id}', [PostController::class, 'postDetail'])->name('postDetail');
});

// Route::get('/lesson/{id_course}' , [LessonController::class,'index'])->name('lesson');
//     Route::get('/', [PostController::class, 'index'])->name('view');
//     Route::get('/posts-detail', [PostController::class, 'postDetail'])->name('postDetail');
// });

Route::get('/lesson', [LessonController::class, 'index'])->name('lesson');

Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return view('layouts.backend.backend');
    });
});

Route::prefix('student')->name('student.')->group(function () {

    Route::get('/edit/{id}', [StudentController::class, 'viewProfile'])->name('view-profile');

    Route::post('/edit/{id}', [StudentController::class, 'editProfile'])->name('edit-profile');
});

Route::get('/payment/{course}', [UserOrderController::class, 'order'])->name('order');
Route::post('/payment/{course}', [UserOrderController::class, 'postOrder'])->name('post-order');




Route::get('/ajax-example', [AjaxController::class, 'index']);
Route::post('/ajax-example', [AjaxController::class, 'store']);

Route::get('/posts/test', [PostController::class, 'test']);


Route::get('pagination', [PaginationController::class, 'index']);
Route::get('pagination/ajax', [PaginationController::class, 'paginationAjax']);


// Route::get('admin/user/list', [AdminUserController::class, 'listUser'])->name('list');
// Route::get('admin/user/list/ajax', [AdminUserController::class, 'listUserAjax']);

// routes/web.php

Route::view('/403', 'errors.403')->name('403');

include('admin.php');
