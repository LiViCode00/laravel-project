<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::getCoursePaginated(8);
        $countCourse = Course::getCountCourse();
        return view("pages.client.courses", ['courses' => $courses, 'count' => $countCourse, compact('courses')]);
    }

    public function courseDetail($id){
        $course = Course::getCourseById($id);
       

        if(!$course) {
            abort(404, "Page not found");
        }
        else{
            $course_id_cate = $course->category_id;
            $coursesCate = Course::getCourseByCategories($course_id_cate);
            $courseLatest = Course::getCourseRandom($course->id);
            $lesson = Course::getLessonByCourse($id);
            $reviews = Review::getReviewByCourse($id, 5);

            return view('pages.client.course-detail', [
                'course' => $course,
                'coursesCate' => $coursesCate,
                'courseLatest' => $courseLatest,
                'lessons' => $lesson,
                'reviews' => $reviews
            ]);
        }
    }

   
}
