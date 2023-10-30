<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view("pages.client.courses");
    }

    public function courseDetail(){
        return view("pages.client.course-detail");


    }
}
