<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CourseController extends Controller
{
    public function add()
    {
        $categories = Category::all();
        return view('pages.backend.course.add',compact("categories"));
    }
    public function postAdd(Request $request)
    {
    }

    public function listCourse()
    {
        $categories = Category::all();
        $courses=Course::orderBy('id','ASC')->paginate(6);
        return view("pages.backend.course.list", compact('categories','courses'));
    }

    public function view()
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


    public function findCourse(Request $request)
    {

        $categories=Category::all();
        $search_key = $request->input('search_key');
        $category = $request->input('category');
        $categoryModel = Category::find($category);

        if ($categoryModel) {
            if ($search_key == '') {
                $courses = $categoryModel->courses()->paginate(6);
            } else {
                $courses = $categoryModel->courses()
                ->where(function ($query) use ($search_key) {
                    $query->where('name', 'LIKE', '%' . $search_key . '%');
                })
                ->paginate(6);
            }
            return view('pages.backend.course.list', compact('courses', 'categories', 'categoryModel'));
        } else {
            if ($search_key != '') {
                $courses = Course::where('name', 'LIKE', '%' . $search_key . '%')
                ->paginate(6);
                return view('pages.backend.course.list', compact('courses', 'categories', 'categoryModel'));
            } else {
                return back()->with('error', "Vui lòng nhập key tìm kiếm hoặc chọn nhóm!");
            }
            
        }
    }
}
