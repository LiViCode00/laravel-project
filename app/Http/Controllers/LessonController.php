<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index($id_course){
        $lessons = Lesson::getLessonByCourse($id_course);
        $course_name = Course::getCourseById($id_course)->name;
        return view ('pages.client.lesson', [
            'lessons' =>  $lessons,
            'course_name' => $course_name
        ]);
    }
}
