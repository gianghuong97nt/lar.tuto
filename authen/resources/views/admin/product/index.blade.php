@extends('admin.layouts.glance')
@section('title')
    Sản phẩm
@endsection
@section('style')
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
    <link href="{{asset('admin_assets/css/table_product.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('admin_assets/css/product.css')}}" rel='stylesheet' type='text/css'/>
@endsection
@section('script')
    {{--<script src="{{ asset('admin_assets/js/product.js') }}"></script>--}}
@endsection
@section('content')
    <div class="forms tables">
        <div class="row">
            <div class="d-inline">
                <h2 class="title1">Danh sách sản phẩm</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 btn-btn d-inline">
                <button type="button" class="btn btn-success btn-2" id="btn-search">Search</button>
                <a href="{{'/'}}"><button type="button" class="btn btn-success btn-2 btn-back">Back</button></a>
            </div>
        </div>
        <div class="panel-body bs-example widget-shadow" >
            {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
            <div class="form-grids row widget-shadow" id="condition_search">
                <div class="condition">
                    <p style="color: white">Điều kiện tìm kiếm
                        <span><i class="fa fa-chevron-down display_view" id="down"></i></span>
                        <span><i class="fa fa-chevron-up display_view" id="up"></i></span>
                    </p>
                </div>
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Mã sản phẩm</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="number"  class="form-control" id="product_id_search" />
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Hãng</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="brand_search" maxlength="20"/>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Danh mục</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="category" maxlength="20"/>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Cỡ</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="size_search" maxlength="20"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Tên sản phẩm</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="product_name_search" maxlength="20"/>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Màu sắc</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="color_search" maxlength="20"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Nhà cung cấp</label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="supplier_search" maxlength="20"/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="table-result">
                <div id="">
                    <table class="table table-bordered tbl_product">
                        <thead>
                        <tr class="product">
                            <th class="tbl_id">Mã </th>
                            <th class="tbl_name">Tên SP </th>
                            {{--<th class="tbl_category">Danh mục</th>--}}
                            <th class="tbl_brand">Hãng</th>
                            <th class="tbl_supplier">Nhà CC</th>
                            <th class="tbl_quantity">SL </th>
                            <th class="tbl_color">Màu</th>
                            <th class="tbl_size">Cỡ</th>
                            <th class="tbl_price_core">Giá nhập</th>
                            <th class="tbl_price_sale">Giá bán</th>
                            <th class="tbl_note">Note</th>
                            <th class="action tbl_action"><a class="btn btn-primary" id="btn-add-row-1" href="{{url('admin/shop/product/create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($products))
                            @foreach($products as $product)
                                <tr>
                                    <td>{{isset($product->id)?$product->id:''}}</td>
                                    <td>{{isset($product->name)?$product->name:''}}</td>
                                    {{--<td>{{isset($product->cat)?$product->cat:''}}</td>--}}
                                    <td>{{isset($product->brand)?$product->brand:''}}</td>
                                    <td>{{isset($product->supplier)?$product->supplier:''}}</td>
                                    <td>{{isset($product->quantity)?$product->quantity:''}}</td>
                                    <td>{{isset($product->color)?$product->color:''}}</td>
                                    <td>{{isset($product->size)?$product->size:''}}</td>
                                    <td>{{isset($product->priceCore)?$product->priceCore:''}}</td>
                                    <td>{{isset($product->priceSale)?$product->priceSale:''}}</td>
                                    <td>{{isset($product->note)?$product->note:''}}</td>
                                    <td>
                                        <a href="{{url('admin/shop/product/'.$product->id.'/delete')}}" id="btn-delete" class="btn btn-danger btn-remove-row-1"><i class="fa fa-trash"></i></a>
                                        <a href="{{url('admin/shop/product/'.$product->id.'/edit')}}" class="btn btn-warning btn-update-row-1" id="btn_update"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection