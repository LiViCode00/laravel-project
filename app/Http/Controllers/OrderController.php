<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class OrderController extends Controller
{

   
    public function order(Course $course)
    {
        if (!Auth::guard('student')->check()) {
            return Redirect::guest(route('login'));
        } else {
            return view('pages.client.order', compact('course'));
        }
       
    }
    public function postOrder(Course $course)
    {
    }
}
