<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function add()
    {
        $teachers = Teacher::all();
        return view("pages.backend.teacher.add", compact('teachers'));
    }
    public function postAdd(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string',
                'exp' => 'required|numeric',
                'image' => 'required|image'
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'min' => ':attribute phải có ít nhất :min kí tự.',
                'unique' => ':attribute đã tồn tại',
                'string' => ':attribute phải là kí tự.',
                'numeric' => ':attribute phải là kiểu dữ liệu số.',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Họ tên',
                'description' => 'Mô tả',
                'exp' => 'Kinh nghiệm',
                'image' => 'Hình ảnh'
            ]
        );


        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/teachers', 'public');
        }

        $teacher = new Teacher();
        $teacher->name = $request->input('name');
        $teacher->image_path = $imagePath;
        $teacher->description = $request->input('description');
        $teacher->exp = $request->input('exp');
        $teacher->save();

        return redirect()->route('admin.teacher.list')->with('success', 'Thêm giáo viên thành công!');
    }


    public function listTeacher()
    {
        $teachers = Teacher::orderBy('id', 'asc')->paginate(2);
        return view("pages.backend.teacher.list", compact('teachers'));
    }
    public function listTeacherAjax()
    {
        if (request()->ajax()) {
            $teachers = Teacher::orderBy('id', 'asc')->paginate(2);
            return view("pages.backend.teacher.data", compact('teachers'))->render();
        }
    }

    public function profile(Teacher $teacher)
    {

        return view('pages.backend.teacher.profile', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('pages.backend.teacher.edit', compact('teacher'));
    }
    public function postEdit(Request $request, Teacher $teacher)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string',
                'exp' => 'required|numeric',
                'image' => 'image'
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'string' => ':attribute phải là kí tự.',
                'numeric' => ':attribute phải là kiểu dữ liệu số.',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Họ tên',
                'description' => 'Mô tả',
                'exp' => 'Kinh nghiệm',
                'image' => 'Hình ảnh'
            ]
        );



        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/teachers', 'public');
            $teacher->image_path = $imagePath;
        }

        // Tạo giáo viên mới và lưu thông tin vào cơ sở dữ liệu
        $teacher->name = $request->input('name');
        $teacher->description = $request->input('description');
        $teacher->exp = $request->input('exp');
        $teacher->save();


        return redirect()->route('admin.teacher.list')->with('success', 'Cập nhật giáo viên thành công!');
    }

    public function delete(Teacher $teacher)
    {
        if ($teacher->delete()) {
            return back()->with("success", "Xóa giáo viên thành công");
        } else {
            return back()->with("error", "Đã có lỗi xảy ra. Vui lòng thử lại");
        }
    }



    public function findTeacher(Request $request)
    {

        $search_key = $request->input('search_key');
        if ($search_key == '') {
            return back()->with('error', 'Vui lòng nhập từ khóa để tìm kiếm.');
        } else {
            $teachers = Teacher::where(function ($query) use ($search_key) {
                $query->where('name', 'LIKE', '%' . $search_key . '%');
            })
                ->paginate(6);
        }
        return view('pages.backend.teacher.data', compact('teachers'))->render();
    }
}
