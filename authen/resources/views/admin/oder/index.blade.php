@extends('admin.layouts.glance')
@section('title')
    Sản phẩm
@endsection
@section('style')
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
                <h2 class="title1">Danh sách đơn hàng</h2>
            </div>
        </div>
        <div class="panel-body bs-example widget-shadow" >
            <div id="table-result">
                <div id="">
                    <table class="table table-bordered tbl_product">
                        <thead>
                        <tr class="product">
                            <th class="tbl_id">Mã </th>
                            <th class="tbl_name">Tên SP </th>
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
                                        <a href="{{url('admin/order/delete')}}" id="btn-delete" class="btn btn-danger btn-remove-row-1"><i class="fa fa-trash"></i></a>
                                        <a href="{{url('admin/order/edit')}}" class="btn btn-warning btn-update-row-1" id="btn_update"><i class="fa fa-pencil"></i></a>
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