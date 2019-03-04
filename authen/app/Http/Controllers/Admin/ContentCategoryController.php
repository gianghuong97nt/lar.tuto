<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\ContentCategoryModel;

class ContentCategoryController extends Controller
{
    //
    public function index(){
        //$items = ContentCategoryModel::all();
        $items = DB::table('content_category')->paginate(5);
        $data = array();
        $data['cats'] = $items;
        return view('admin.content.content.category.index', $data);
    }

    public function create(){
        $data = array();
        $cats = ContentCategoryModel::all();
        $data['cats'] = $cats;
        return view('admin.content.content.category.submit', $data);

    }

    public function edit($id){
        $item = ContentCategoryModel::find($id);

        $data = array();
        $data['product'] = $item;
        $data['id'] = $id;
        $cats = ContentCategoryModel::all();
        $data['cat'] = $cats;
        return view('admin.content.content.category.edit', $data);

    }

    public function delete($id){
        $item = ContentCategoryModel::find($id);
        $data = array();
        $data['id'] = $id;
        $data['product'] = $item;
        return view('admin.content.content.category.delete', $data);

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'intro' => 'required',
            'images' => 'required',
            'desc' => 'required',

        ]);
        $input = $request->all();

        $item = new ContentCategoryModel();

        $item->name = $input['name'];
        $item->slug = $input['slug'];
        $item->images = $input['images'];
        $item->intro = $input['intro'];
        $item->desc = $input['desc'];


        $item->save();
        return redirect('/admin/content/category');
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'intro' => 'required',
            'images' => 'required',
            'desc' => 'required',

        ]);

        $input = $request->all();
        $item = ContentCategoryModel::find($id);

        $item->name = $input['name'];
        $item->slug = $input['slug'];
        $item->images = $input['images'];
        $item->intro = $input['intro'];
        $item->desc = $input['desc'];

        $item->save();
        return redirect('/admin/content/category');
    }

    public function destroy($id){
        $item = ContentCategoryModel::find($id);

        $item->delete();

        return redirect('/admin/content/category');
    }
}
