@extends('admin.layouts.glance')

@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <h1>Thêm mới sản phẩm</h1>
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
            <form name="product" action="{{url('admin/shop/product')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên sản phẩm</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control1" id="focusedinput" placeholder="Nhập tên sản phẩm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8">
                        <select name="cat_id">
                            <option value="0">Không có danh mục</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" value="{{old('slug')}}" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" name="images" value="{{old('images')}}" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="intro" class="col-sm-2 control-label">Intro</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1">{{old('intro')}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="intro" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1">{{old('desc')}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Price Core</label>
                    <div class="col-sm-8">
                        <input type="text" name="priceCore" value="{{old('priceCore')}}" class="form-control1" id="focusedinput" placeholder="Nhập giá bán thật (Interger)">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Price Sale</label>
                    <div class="col-sm-8">
                        <input type="text" name="priceSale" value="{{old('priceSale')}}" class="form-control1" id="focusedinput" placeholder="Nhập giá giảm giá (Interger)">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Stock</label>
                    <div class="col-sm-8">
                        <input type="text" name="stock" value="{{old('stock')}}" class="form-control1" id="focusedinput" placeholder="Nhập số sản phẩm còn tỏng kho">
                    </div>
                </div>
                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
