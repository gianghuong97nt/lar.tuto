@extends('admin.layouts.glance')

@section('title')
    Sửa bài viết {{$id}}
@endsection
@section('content')
    <h1>Sửa bài viết </h1>
    <div class="row">
        <div class="form-three widget-shadow">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form name="category" action="{{url('admin/content/post/'.$id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên danh mục</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput" value="{{$post->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Cat</label>
                    <div class="col-sm-8">
                        <input type="text" name="cat_id" class="form-control1" id="focusedinput" value="{{$post->cat_id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" class="form-control1" id="focusedinput" value="{{$post->slug}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" name="images" class="form-control1" id="focusedinput" value="{{$post->images}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="intro" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-8"><textarea name="author_id" cols="50" rows="4" class="form-control1">{{$post->author_id}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="intro" class="col-sm-2 control-label">View</label>
                    <div class="col-sm-8"><textarea name="view" cols="50" rows="4" class="form-control1">{{$post->view}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="intro" class="col-sm-2 control-label">Intro</label>
                    <div class="col-sm-8"><textarea name="intro" cols="50" rows="4" class="form-control1">{{$post->intro}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="intro" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="desc" cols="50" rows="4" class="form-control1">{{$post->desc}}</textarea></div>
                </div>


                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
