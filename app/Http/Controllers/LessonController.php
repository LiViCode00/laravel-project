<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function index($id_course) {
        $lesson = Lesson::getLessonById($id_course);
    
        $lessonInSameCourse = Lesson::getLessonByCourse($lesson->course_id);
        $lesson_name = $lesson->course_name;
    
        $lastLesson = DB::table('lessons')->orderBy('id', 'desc')->first();
    
        $lastLessonId = (int) $lastLesson->id;

        if (!Auth::guard('student')->check()) {
            return Redirect::guest(route('login'));
        } else {
            return view('pages.client.lesson', [
                'lessons' => $lessonInSameCourse,
                'lesson_name' => $lesson_name,
                'lesson' => $lesson,
                'lastLessonId' => $lastLessonId,
            ]);
        }

    }

    public function lessonByIdCourse($id_course){
        $lessonInSameCourse = Lesson::getLessonByCourse($id_course);
        $lesson_name = Course::getCourseName($id_course);
        $lastLesson = DB::table('lessons')->orderBy('id', 'desc')->first();
    
        $lastLessonId = (int) $lastLesson->id;
        $lesson = Lesson::getLessonById(1);
        
        if (!Auth::guard('student')->check()) {
            return Redirect::guest(route('login'));
        } else {
            return view('pages.client.lesson', [
                'lessons' => $lessonInSameCourse,
                'lesson_name' => $lesson_name,
                'lesson' => $lesson,
                'lastLessonId' => $lastLessonId,
            ]);
        }
    
    }
    
}
