<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::layDanhSach();
        return view("pages.client.courses", ['courses' => $courses]);
    }

    public function courseDetail(){
        return view("pages.client.course-detail");


    }
}
