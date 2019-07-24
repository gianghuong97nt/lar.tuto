<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\ContentCategoryModel;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.submit');

    }

    public function edit(){
        return view('admin.category.edit');

    }

    public function delete(){
        return view('admin.category.delete');

    }

    public function store(){
        return redirect('/admin/category');
    }

    public function update(){
        return redirect('/admin/category');
    }

    public function destroy(){
        return redirect('/admin/category');
    }
}
