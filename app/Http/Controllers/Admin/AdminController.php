<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function viewProfile(){

        return view("pages.backend.profile");
    }
    public function editProfile(Admin $admin, Request $request){
       
        $request->validate(
            [
                'name' => 'required|string|',
                'email' => 'required|string|email',

            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'string' => ':attribute phải là kí tự.',
                'min' => ':attribute phải có ít nhất :min kí tự.'
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );

       

        $admin->name = $request->name;
        if (!empty($admin->password)) {
            $admin->password = bcrypt($request->password);
        } 
        $admin->save();
        return back()->with('notice', 'Cập nhật thông tin thành công');

    }
}
