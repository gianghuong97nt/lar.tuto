@extends('admin.layouts.glance')
@section('title')
    {{ trans('admin.titleProduct')}}
@endsection
@section('style')
    <link href="{{asset('admin_assets/css/product.css')}}" rel='stylesheet' type='text/css' />
@endsection
@section('content')
    <div class="forms tables">
        <div class="row">
            <div class="d-inline">
                <h2 class="title1">Danh sách sản phẩm</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 btn-btn d-inline">
                <button type="button" class="btn btn-success btn-2" id="btn-search">Search</button>
                <a href="{{'admin/'}}"><button type="button" class="btn btn-success btn-2 ">Back</button></a>
            </div>
        </div>
        <div class="panel-body bs-example widget-shadow" >
            <div id="table-result">
                <div id="">
                    <table class="table table-bordered tbl_product">
                        <thead>
                        <tr class="product">
                            <th class="tbl_id">Mã </th>
                            <th class="tbl_name">Tên người dùng</th>
                            <th class="tbl_brand">Email</th>
                            <th class="tbl_supplier">Role</th>
                            <th class="tbl_quantity">Address </th>
                            <th class="tbl_color">Phone number</th>
                            <th class="tbl_size">Gender</th>
                            <th colspan="2"  class="action tbl_action"><a class="btn btn-primary" id="btn-add-row-1" href="{{url('admin/product/create')}}"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( isset($users ) )
                            @foreach( $users as $user )
                                <tr>
                                    <td>{{ isset($user->id) ? $user->id : '' }}</td>
                                    <td>{{ isset($user->name) ? $user->name : '' }}</td>
                                    <td>{{ isset($user->email) ? $user->email : '' }}</td>
                                    <td>{{ isset($user->role) ? $user->role: '' }}</td>
                                    <td>{{ isset($user->address) ? $user->address : '' }}</td>
                                    <td>{{ isset($user->phone_number) ? $user->phone_number : '' }}</td>
                                    <td>{{ isset($user->gender) ? $user->gender : '' }}</td>
                                    <td>
                                        <a href="{{url('admin/user/'.$user->id.'/edit')}}" class="btn btn-warning btn-update-row-1 d-inline" id="btn_update"><i class="fa fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        <form name="product" action="{{url('admin/user/'.$user->id.'/delete')}}" method="post" class="form-horizontal">
                                            @csrf

                                            <div class="col-sm-offset-2">
                                                <button type="submit" class="btn btn-danger btn-remove-row-1 d-inline"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </form>
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
