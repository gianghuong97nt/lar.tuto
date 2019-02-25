<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;

class AdminController extends Controller
{

    /**
     * Hàm khởi tạo của clas ngay khi khởi tạo đối tượng
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }

    /**
     * Phương thức trả về view khi đang nhập admin thành công
     */
    public function index(){
        return view('admin.dashboard');
    }

    /**
     * Phương thức trả về view dùng để đăng kí tài khoản admin
     */
    public function create(){
        return view('admin.auth.register');
    }

    public function store(Request $request){
        //validate dữ liệu từ form đi
        $this->validate($request,array(
            'name' =>'required',
            'email' => 'required',
            'password' => 'required'
        ));

        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();

        return redirect()->route('admin.auth.login');
    }
}
