<?php

namespace App\Http\Controllers\Auth\Shipper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest:shipper')->except('logout');
    }

    /**
     * Phuwong thức trả về view đăng nhập cho shipper
     */
    public function login(){
        return view ('shipper.auth.login');
    }

    /**
     * Dùng để đăng  nhập cho shipper
     * lấy thông tin form
     */

    public function loginSeller(Request $request){
        //validate dữ liệu đăng nhập
        $this->validate($request, array(
            'email' => 'required|email',
            'password' => 'required|min:6',

        ));

        //Đăng nhập

        if(Auth::guard('shipper')->attempt(
            ['email' => $request->email, 'password' => $request->password], $request->remember
        )){
            // Nếu đăng nhập thành công thì sẽ chuyển hướng về view dashboard
            return redirect()->intended(route('shipper.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Phương thức đăng xuất
     */
    public function logout(){
        Auth::guard('shipper')->logout();
        return redirect()->route('shipper.auth.login');
    }
}
