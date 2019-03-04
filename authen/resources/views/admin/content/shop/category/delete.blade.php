@extends('admin.layouts.glance')

@section('title')
    Xóa danh mục sản phẩm {{$id}}
@endsection
@section('content')
    <h1>Xóa danh mục sản phẩm {{$id}} : {{$cat->name}}</h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form name="category" action="{{url('admin/shop/category/'.$id.'/delete')}}" method="post" class="form-horizontal">
                @csrf
                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Xóa</button>
                </div>
            </form>
        </div>
    </div>
@endsection
