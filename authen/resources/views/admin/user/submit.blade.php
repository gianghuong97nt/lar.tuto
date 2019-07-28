@extends('admin.layouts.glance')

@section('title')
    {{ trans('admin.tilteAddProduct')}}
@endsection
@section('content')
    <h1>Thêm mới sản phẩm</h1>
    <div class="row">
        <div class="form-three widget-shadow">

            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form name="product" action="{{url('admin/user')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên người dùng</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control1" placeholder="Nhập tên sản phẩm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" value="{{old('email')}}" class="form-control1" placeholder="Nhập tên sản phẩm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-8">
                        <select name="role">
                            <option>Không có danh mục</option>
                            <option value="1">Administrator</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" value="{{old('password')}}" class="form-control1" placeholder="Nhập tên hãng">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Nhập lại password </label>
                    <div class="col-sm-8">
                        <input type="text" name="supplier" value="{{old('repassword')}}" class="form-control1" placeholder="Nhập nhà cung cấp">
                    </div>
                </div>
                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">ADD</button>
                </div>
            </form>
        </div>
    </div>
@endsection
