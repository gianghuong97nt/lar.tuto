<?php

namespace App\Http\Controllers;

use App\Model\SellerModel;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    //
    /**
     * Hàm khởi tạo của clas ngay khi khởi tạo đối tượng
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:seller')->only('index');
    }

    /**
     * Phương thức trả về view khi đang nhập seller thành công
     */
    public function index(){
        return view('seller.dashboard');
    }

    /**
     * Phương thức trả về view dùng để đăng kí tài khoản admin
     */
    public function create(){
        return view('seller.auth.register');
    }


    public function store(Request $request){
        //validate dữ liệu từ form đi
        $this->validate($request,array(
            'name' =>'required',
            'email' => 'required',
            'password' => 'required'
        ));

        $sellerModel = new SellerModel();
        $sellerModel->name = $request->name;
        $sellerModel->email = $request->email;
        $sellerModel->password = bcrypt($request->password);
        $sellerModel->save();

        return redirect()->route('seller.auth.login');
    }


}
