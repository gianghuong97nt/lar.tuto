<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function index(){
        return view('admin.order.index');
    }


    public function delete(){
        return view('admin.order.delete');

    }

    public function destroy(){
        return redirect('/admin/order');
    }

}
