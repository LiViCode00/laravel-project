<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\category;
use App\Models\Course;
use App\Models\CourseReviews;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReviewController extends Controller
{
  

    public function listReview()
    {
        $reviews=CourseReviews::orderBy('id','asc')->paginate(6);
       return view('pages.backend.review.list',compact('reviews'));
       
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
