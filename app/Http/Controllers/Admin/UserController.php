<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'image' => 'required|image',
                'group' => ['required', 'integer', function ($attribute, $value, $fail) {
                    if ($value === '0') return $fail('Vui lòng chọn nhóm');
                }]
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'string' => ':attribute phải là kí tự.',
                'min' => ':attribute phải có ít nhất :min kí tự.',
                'unique' => ':attribute đã tồn tại',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'group' => "Nhóm",
                "image" => ' Hình ảnh'
            ]
        );

        
        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/users', 'public');
        }


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->group_id = $request->group;
        $user->image_path = $imagePath;
        $user->save();

        return redirect()->route("admin.user.list")->with("success", "Thêm người dùng thành công");
    }

    public function listUser()
    {
        $users = User::withTrashed()->orderBy('deleted_at', 'ASC')->orderBy('id', 'ASC')->paginate(6);
        $groups = Group::all();
        return view("pages.backend.user.list", compact(["users", "groups"]));
    }

    public function profile(User $user)
    {
        return view("pages.backend.user.profile", compact(["user"]));
    }

    public function edit(User $user)
    {
        $groups = Group::all();
        return view("pages.backend.user.edit", compact(["user", "groups"]));
    }
    public function postEdit(Request $request, User $user)
    {
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
                'unique' => ':attribute đã tồn tại',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'group' => "Nhóm",
                "image" => ' Hình ảnh'
            ]
        );

      
      
        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/users', 'public');
            $user->image_path = $imagePath;
        }

        $user->name = $request->name;
        $user->group_id = $request->group;
        $user->save();
        return redirect()->route("admin.user.list")->with("success", "Cập nhật người dùng thành công");
    }

    public function delete(User $user)
    {

        if ($user->delete()) {
            return back()->with("success", "Xóa người dùng thành công");
        } else {
            return back()->with("error", "Đã có lỗi xảy ra. Vui lòng thử lại");
        }
    }

    public function forceDelete($id)
    {

        if (User::withTrashed()->where('id', $id)->forceDelete())
            return back()->with("success", "Xóa vĩnh viễn người dùng thành công");
        else
            return back()->with("error", "Đã có lỗi xảy ra. Vui lòng thử lại");
    }

    public function restore($id)
    {


        if (User::withTrashed()->where('id', $id)->restore())
            return back()->with("success", "Khôi phục người dùng thành công");
        else
            return back()->with("error", "Đã có lỗi xảy ra. Vui lòng thử lại");
    }

    public function deleteMultiple(Request $request)
    {
        $userIDs = $request->input("userCheckbox");

        if ($userIDs) {
            User::whereIn("id", $userIDs)->delete();
            return back()->with("success", "Xóa nhiều người dùng thành công");
        } else {
            return back()->with("error", "Chưa có người dùng nào được chọn.");
        }
    }

    public function findUser(Request $request)
    {
        $groups = Group::all();
        $search_key = $request->input('search_key');
        $group = $request->input('group');
        $groupModel = Group::find($group);

        if ($groupModel) {
            if ($search_key == '') {
                $users = $groupModel->users()->paginate(6);
            } else {
                $users = $groupModel->users()
                    ->where(function ($query) use ($search_key) {
                        $query->where('name', 'LIKE', '%' . $search_key . '%')
                            ->orWhere('email', 'LIKE', '%' . $search_key . '%');
                    })
                    ->paginate(6);
            }
            return view('pages.backend.user.list', compact('users', 'groups', 'groupModel'));
        } else {
            if ($search_key != '') {
                $users = User::where('name', 'LIKE', '%' . $search_key . '%')
                    ->orWhere('name', 'LIKE', '%' . $search_key . '%')
                    ->paginate(6);
                return view('pages.backend.user.list', compact('users', 'groups', 'groupModel'));
            } else {
                return back()->with('error', "Vui lòng nhập key tìm kiếm hoặc chọn nhóm!");
            }
        }
    }
}
