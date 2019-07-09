<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ContentPostModel;
use Illuminate\Support\Facades\DB;

class ContentPostController extends Controller
{
    //
    public function index(){
        $items = ContentPostModel::all();
        //$items = DB::table('content_category')->paginate(5);
        $data = array();
        $data['posts'] = $items;
        return view('admin.content.content.post.index', $data);
    }

    public function create(){
        $data = array();
        $posts = ContentPostModel::all();
        $data['posts'] = $posts;
        return view('admin.content.content.post.submit', $data);

    }

    public function edit($id){
        $item = ContentPostModel::find($id);

        $data = array();
        $data['post'] = $item;
        $data['id'] = $id;
        $posts = ContentPostModel::all();
        $data['posts'] = $posts;
        return view('admin.content.content.post.edit', $data);

    }

    public function delete($id){
        $item = ContentPostModel::find($id);
        $data = array();
        $data['id'] = $id;
        $data['post'] = $item;
        return view('admin.content.content.post.delete', $data);

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'intro' => 'required',
            'images' => 'required',
            'desc' => 'required',
            'author_id' => 'required',
            'view' => 'required',
            'cat_id' => 'required',

        ]);
        $input = $request->all();

        $item = new ContentPostModel();

        $item->name = $input['name'];
        $item->slug = $input['slug'];
        $item->images = $input['images'];
        $item->intro = $input['intro'];
        $item->author_id = isset($input['author_id']) ? $input['author_id']: 0;
        $item->view = isset($input['view']) ? $input['view']: 0;
        $item->cat_id = $input['cat_id'];
        $item->desc = $input['desc'];


        $item->save();
        return redirect('/admin/content/post');
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'intro' => 'required',
            'images' => 'required',
            'desc' => 'required',
            'author_id' => 'required',
            'view' => 'required',
            'cat_id' => 'required',

        ]);

        $input = $request->all();
        $item = ContentPostModel::find($id);

        $item->name = $input['name'];
        $item->slug = $input['slug'];
        $item->images = $input['images'];
        $item->intro = $input['intro'];
        $item->desc = $input['desc'];
        $item->author_id = isset($input['author_id']) ? $input['author_id']: 0;
        $item->view = isset($input['view']) ? $input['view']: 0;
        $item->cat_id = $input['cat_id'];

        $item->save();
        return redirect('/admin/content/post');
    }

    public function destroy($id){
        $item = ContentPostModel::find($id);

        $item->delete();

        return redirect('/admin/content/post');
    }
}
