<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Phuwong thức trả về view đăng nhập cho admin
     */
    public function login(){
        return view ('admin.auth.login');
    }

    /**
     * Dùng để đăng  nhập cho admin
     * lấy thông tin form
     */

    public function loginAdmin(Request $request){
        //validate dữ liệu đăng nhập
        $this->validate($request, array(
            'email' => 'required|email',
            'password' => 'required|min:6',

        ));

        //Đăng nhập

        if(Auth::guard('admin')->attempt(
            ['email' => $request->email, 'password' => $request->password], $request->remember
        )){
            // Nếu đăng nhập thành công thì sẽ chuyển hướng về view dashboard
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Phương thức đăng xuất
     */
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login');
    }
}
