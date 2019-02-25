<?php

namespace App\Http\Controllers\Auth\Seller;

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
        $this->middleware('guest:seller')->except('logout');
    }

    /**
     * Phuwong thức trả về view đăng nhập cho seller
     */
    public function login(){
        return view ('seller.auth.login');
    }

    /**
     * Dùng để đăng  nhập cho admin
     * lấy thông tin form
     */

    public function loginSeller(Request $request){
        //validate dữ liệu đăng nhập
        $this->validate($request, array(
            'email' => 'required|email',
            'password' => 'required|min:6',

        ));

        //Đăng nhập

        if(Auth::guard('seller')->attempt(
            ['email' => $request->email, 'password' => $request->password], $request->remember
        )){
            // Nếu đăng nhập thành công thì sẽ chuyển hướng về view dashboard
            return redirect()->intended(route('seller.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Phương thức đăng xuất
     */
    public function logout(){
        Auth::guard('seller')->logout();
        return redirect()->route('seller.auth.login');
    }
}
