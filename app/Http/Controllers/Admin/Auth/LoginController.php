<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showFormLogin(Request $request)
    {
        return view("pages.backend.login");
    }
    public function login(Request $request)
    {
        $request->validate(
            [
               'email' => 'required|string|email',
                'password' => 'required|string|min:6',
            ],
            [
                'required' => ':attribute bắt buộc phải nhập.',
                'email' => ':attribute không đúng định dạng.',
                'string' => ':attribute phải là kí tự.',
                'min' => ':attribute phải có ít nhất :min kí tự.'
            ],
            [
               'email' => 'Email',
                'password' => 'Mật khẩu'
            ]
        );

        $dataLogin=$request->except(['_token']);
       
        if(Auth::guard('admin')->attempt($dataLogin)){

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('msg','Đăng nhập không thành công. Vui lòng thử lại.');
        }
    }

    
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/admin/login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function loggedOut(Request $request)
    {
        //
    }

}
