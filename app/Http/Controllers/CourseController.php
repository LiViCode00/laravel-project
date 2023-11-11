<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::getCourses();
        return view("pages.client.courses", ['courses' => $courses]);
    }

    public function courseDetail($id){
        $course = Course::getCourseById($id);
        if(!$course) {
            abort(404, "Page not found");
        }
        else{
            return view('pages.client.course-detail', [ 'course'=> $course ] );
        }
    }
}
