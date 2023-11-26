<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\category;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CourseController extends Controller
{
    public function add()
    {
        $categories = Category::all();
        $teachers=Teacher::all();
        return view('pages.backend.course.add',compact(["categories","teachers"]));
    }
    public function postAdd(Request $request)
    {

        $request->validate(
            [
                'name'=>'required|string',
                'image'=>'image',
                'detail'=>'required|string',
                'price'=>'required|numeric',
                'sale_price'=>'required|numeric',
                'category' => ['required', 'integer', function ($attribute, $value, $fail) {
                    if ($value === '0') return $fail('Vui lòng chọn danh mục khóa học');
                }],
                'teacher' => ['required', 'integer', function ($attribute, $value, $fail) {
                    if ($value === '0') return $fail('Vui lòng chọn giáo viên của khóa học');
                }]
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'string' => ':attribute phải là kí tự.',
                'numeric'=> ':attribute phải là kiểu dữ liệu số',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Tên khóa học',
                'detail' => 'Mô tả',
                'price' => 'Giá gốc',
                'sale_price' => "Giá khuyến mãi",
                'category' => "Danh mục khóa học",
                "image"=>' Hình ảnh',
                'teacher' => "Giáo viên"
            ]
            );

            if ($request->has('image')) {
                $imagePath = $request->file('image')->store('img/courses', 'public');
            }

            $course= new Course();
            $course->name=$request->name;
            $course->detail=$request->detail;
            $course->price=$request->price;
            $course->sale_price=$request->sale_price;
            $course->image_path=$imagePath;
            $course->category_id=$request->category;
            $course->teacher_id=$request->teacher;
            $course->save();

            return redirect()->route('admin.course.lesson.list',compact('course'));


    }

    public function listCourse()
    {
        $categories = Category::all();
        $courses=Course::orderBy('id','ASC')->paginate(6);
        return view("pages.backend.course.list", compact('categories','courses'));
    }

    public function manage(Course $course)
    {
        return redirect()->route('admin.course.lesson.list',compact('course'));
    }

 
    public function detail(Course $course){
        
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
