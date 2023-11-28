<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LessonController extends Controller
{
    public function add()
    {
        return view('pages.backend.lesson.add');
    }
    public function postAdd(Request $request)
    {
    }

    public function listLesson(Course $course)
    {

        $lessons = $course->lessons()->orderBy('id', 'asc')->paginate(2);
        return view('pages.backend.lesson.list', compact(['course', 'lessons']));
    }
    public function listLessonAjax(Course $course)
    {
        if (request()->ajax()) {
            $lessons = $course->lessons()->orderBy('id', 'asc')->paginate(2);
            return view('pages.backend.lesson.data', compact(['course', 'lessons']))->render();
        }
    }

    public function manage()
    {
    }


    public function edit()
    {
    }
    public function postEdit(Request $request,)
    {
    }

    public function delete()
    {
    }


    public function findLesson(Request $request)
    {
    }
}
