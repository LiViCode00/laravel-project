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
                'email' => 'required|string|email|unique:teachers',
                'password' => 'required|string|min:6',
                'description' => 'required|string',
                'exp' => 'required|numeric',
                'image' => 'required|image'
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'min' => ':attribute phải có ít nhất :min kí tự.',
                'unique' => ':attribute đã tồn tại',
                'string' => ':attribute phải là kí tự.',
                'numeric' => ':attribute phải là kiểu dữ liệu số.',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'description' => 'Mô tả',
                'exp' => 'Kinh nghiệm',
                'image' => 'Hình ảnh'
            ]
        );


        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/teachers', 'public');
        }



        // Tạo người dùng mới và lưu thông tin vào cơ sở dữ liệu
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->image_path = $imagePath;
        $user->group_id=2;
        $user->save();

        // Sử dụng id của người dùng mới tạo để tạo bản ghi giáo viên
        $teacher = new Teacher();
        $teacher->user_id = $user->id;
        $teacher->name = $user->name;
        $teacher->email = $user->email;
        $teacher->password = $user->password;
        $teacher->image_path = $user->image_path;
        $teacher->description = $request->input('description');
        $teacher->exp = $request->input('exp');
        $teacher->save();

        return redirect()->route('admin.teacher.list')->with('success', 'Thêm giáo viên thành công!');
    }


    public function listTeacher()
    {
        $teachers = Teacher::orderBy('id', 'asc')->paginate(6);
        return view("pages.backend.teacher.list", compact('teachers'));
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

        $user=$teacher->user;
       
        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/teachers', 'public');
            $teacher->image_path = $imagePath;
            $user->image_path = $imagePath;
        }

        // Tạo giáo viên mới và lưu thông tin vào cơ sở dữ liệu
        $teacher->name = $request->input('name');
        $user->name = $request->input('name');
        $teacher->description = $request->input('description');
        $teacher->exp = $request->input('exp');



        $teacher->save();
        $user->save();

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
        return view('pages.backend.teacher.list', compact('teachers'));
    }
}
