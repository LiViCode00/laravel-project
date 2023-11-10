<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {

        $groups = Group::all();
        return view("pages.backend.user.add", compact('groups'));
    }
    public function postAdd(Request $request)
    {

        $request->validate(
            [
                "name" => "required|string",
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|min:6',
                'group' => ['required', 'integer', function ($attribute, $value, $fail) {
                    if ($value === '0') return $fail('Vui lòng chọn nhóm');
                }]
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'string' => ':attribute phải là kí tự.',
                'min' => ':attribute phải có ít nhất :min kí tự.',
                'unique'=> ':attribute đã tồn tại'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'group' => "Nhóm"
            ]
        );

       
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->group_id = $request->group;
            $user->save();
            return redirect()->route("admin.user.list")->with("success","Thêm người dùng thành công");
        
    }

    public function listUser()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(6);
        $count = User::count();
        return view("pages.backend.user.list", compact(["users", "count"]));
    }

    public function profile(User $user){
        return view("pages.backend.user.profile", compact(["user"]));
    }

    public function edit(User $user){
        $groups = Group::all();
        return view("pages.backend.user.edit", compact(["user","groups"]));
    }
    public function postEdit(Request $request, User $user){
        $request->validate(
            [
                "name" => "required|string",
                // 'email' => 'required|string|email|unique:users',
                // 'password' => 'required|string|min:6',
                'group' => ['required', 'integer', function ($attribute, $value, $fail) {
                    if ($value === '0') return $fail('Vui lòng chọn nhóm');
                }]
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'string' => ':attribute phải là kí tự.',
                'min' => ':attribute phải có ít nhất :min kí tự.',
                'unique'=> ':attribute đã tồn tại'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'group' => "Nhóm"
            ]
        );

            $user->name = $request->name;
            // $user->email = $request->email;
            // $user->password = $request->password;
            $user->group_id = $request->group;
            $user->save();
            return redirect()->route("admin.user.list")->with("success","Cập nhật người dùng thành công");
    }
}
