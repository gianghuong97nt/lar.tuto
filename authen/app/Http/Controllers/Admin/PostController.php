<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ContentPostModel;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        return view('admin.post.index');
    }

    public function create(){
        return view('admin.post.submit');

    }

    public function edit(){
        return view('admin.post.edit');

    }

    public function delete(){
        return view('admin.post.delete');

    }

    public function store(){
        return redirect('/admin/post');
    }

    public function update(){
        return redirect('/admin/post');
    }

    public function destroy(){
        return redirect('/admin/post');
    }
}
