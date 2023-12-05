<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function viewProfile()
    {


        if (Auth::user()) {
            return view("pages.backend.profile");
        } else {
            return redirect()->route("admin.login");
        }
    }
    public function editProfile($id, Request $request)
    {

        $user = User::find($id);
        $request->validate(
            [
                'name' => 'required|string|',
                'email' => 'required|string|email',
                'image' => 'image'
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'string' => ':attribute phải là kí tự.',
                'min' => ':attribute phải có ít nhất :min kí tự.',
                'image' => 'File không hợp lệ. Vui lòng thử lại'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
                'image' => 'Hình ảnh'
            ]
        );

        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('img/teachers', 'public');
            $user->image_path = $imagePath;
        }

        $user->name = $request->name;
        if (!empty($user->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return back()->with('notice', 'Cập nhật thông tin thành công');
    }

    public function menu()
    {
        return view('pages.backend.menu');
    }

    public function listRole()
    {
        $roles = Role::all();


        return view('pages.backend.permission.roleList', compact('roles'));
    }

    public function setPermissionForRole(Role $role)
    {
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        $permissions = Permission::all();
        return view('pages.backend.permission.setPermissionForRole', compact('role', 'permissions', 'rolePermissions'));
    }
    public function postSetPermissionForRole(Role $role, Request $request)
    {

        $selectedPermissions = $request->input('permissions', []);
        $role->syncPermissions($selectedPermissions);
        return redirect()->route('admin.role.index')->with('success', "Đã đồng bộ quyền cho vai trò {$role->name} thành công.");
    }

    public function addRole()
    {

        $permissions = Permission::all();
        return view('pages.backend.permission.addRole', compact('permissions'));
    }

    public function postAddRole(Request $request)
    {
        // Validate the request
        $request->validate(
            [
                'name' => 'required|string|unique:roles,name',
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'string' => ':attribute phải là kí tự.',
                'unique' => ':attribute đã tồn tại.',
            ],
            [
                'name' => 'Tên vai trò',
            ]
        );


        $name = $request->name;


        $selectedPermissions = $request->input('permissions', []);


        $role = Role::create(['name' => $name]);


        $role->syncPermissions($selectedPermissions);

        return redirect()->route('admin.role.index')->with('success', 'Vai trò đã được tạo thành công.');
    }

    public function deleteRole(Role $role)
    {
        if (!$role) {
            return redirect()->route('admin.role.index')->with('success', 'Vai trò không tồn tại.');
        }
        $role->delete();
        return redirect()->route('admin.role.index')->with('success', 'Vai trò đã được xóa thành công.');
    }

    public function listPermission()
    {
        $permissions = Permission::paginate(10);
        return view('pages.backend.permission.permissionList', compact('permissions'));
    }
    public function addPermission()
    {
        return view('pages.backend.permission.addPermission');
    }
    public function postAddPermission(Request $request)
    {
        // Validate the request
        $request->validate(
            [
                'name' => 'required|string|unique:roles,name',
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'string' => ':attribute phải là kí tự.',
                'unique' => ':attribute đã tồn tại.',
            ],
            [
                'name' => 'Tên quyền hạn',
            ]
        );
        $name = $request->name;
        $permission = Permission::create(['name' => $name]);
        return redirect()->route('admin.permission.index')->with('success', 'Quyền hạn đã được tạo thành công.');
    }
    public function editPermission(Permission $permission)
    {
        return view('pages.backend.permission.editPermission', compact('permission'));
    }
    public function postEditPermission(Request $request, Permission $permission)
    {
        // Validate the request
        $request->validate(
            [
                'name' => 'required|string|unique:roles,name',
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'string' => ':attribute phải là kí tự.',
                'unique' => ':attribute đã tồn tại.',
            ],
            [
                'name' => 'Tên quyền hạn',
            ]
        );
        $name = $request->name;
        $permission->name=$name;
        $permission->save();
        return redirect()->route('admin.permission.index')->with('success', 'Quyền hạn đã được cập nhật thành công.');
    }

    public function deletePermission(Permission $permission)
    {
        if (!$permission) {
            return redirect()->route('admin.permission.index')->with('success', 'Quyền hạn không tồn tại.');
        }
        $permission->delete();
        return redirect()->route('admin.permission.index')->with('success', 'Quyền hạn đã được xóa thành công.');
    }
}
