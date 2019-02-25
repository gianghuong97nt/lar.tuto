<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ShipperModel;

class ShipperController extends Controller
{
    //
    //
    /**
     * Hàm khởi tạo của clas ngay khi khởi tạo đối tượng
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:shipper')->only('index');
    }

    /**
     * Phương thức trả về view khi đang nhập shipper thành công
     */
    public function index(){
        return view('shipper.dashboard');
    }

    /**
     * Phương thức trả về view dùng để đăng kí tài khoản shipper
     */
    public function create(){
        return view('shipper.auth.register');
    }


    public function store(Request $request){
        //validate dữ liệu từ form đi
        $this->validate($request,array(
            'name' =>'required',
            'email' => 'required',
            'password' => 'required'
        ));

        $shipperModel = new ShipperModel();
        $shipperModel->name = $request->name;
        $shipperModel->email = $request->email;
        $shipperModel->password = bcrypt($request->password);
        $shipperModel->save();

        return redirect()->route('shipper.auth.login');
    }
}
