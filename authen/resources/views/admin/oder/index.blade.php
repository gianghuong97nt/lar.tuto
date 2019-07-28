@extends('admin.layouts.glance')
@section('title')
    Sản phẩm
@endsection
@section('style')
    <link href="{{asset('admin_assets/css/table_product.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('admin_assets/css/product.css')}}" rel='stylesheet' type='text/css'/>
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
                            <th class="tbl_name">Tên đơn hàng</th>
                            <th class="tbl_brand">Tên khách hàng</th>
                            <th class="tbl_supplier">Địa chỉ</th>
                            <th class="tbl_quantity">Số điện thoại</th>
                            <th class="tbl_note">Tổng tiền</th>
                            <th class="action tbl_action"><a class="btn btn-primary" id="btn-add-row-1" href="{{url('admin/shop/product/create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( isset($oders) )
                            @foreach( $oders as $oder )
                                <tr>
                                    <td>{{ isset($oder->id) ? $oder->id : '' }}</td>
                                    <td>{{ isset($oder->name) ? $oder->name : '' }}</td>
                                    <td>{{ isset($oder->brand) ? $oder->brand : '' }}</td>
                                    <td>{{ isset($oder->supplier) ? $oder->supplier : '' }}</td>
                                    <td>{{ isset($oder->quantity) ? $oder->quantity : '' }}</td>
                                    <td>{{ isset($oder->color) ? $oder->color : '' }}</td>
                                    <td>
                                        <a href="{{url('admin/order/'.$id.'/delete')}}" id="btn-delete" class="btn btn-danger btn-remove-row-1"><i class="fa fa-trash"></i></a>
                                        <a href="{{url('admin/order/'.$id.'/edit')}}" class="btn btn-warning btn-update-row-1" id="btn_update"><i class="fa fa-pencil"></i></a>
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