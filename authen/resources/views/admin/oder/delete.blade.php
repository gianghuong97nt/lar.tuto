@extends('admin.layouts.glance')

@section('title')
    Xóa đơn hàng {{$id}}
@endsection
@section('content')
    <h1>Xoá đơn hàng {{$id}}</h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form name="product" action="{{url('admin/order/delete')}}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Xóa</button>
                </div>
            </form>
        </div>
    </div>
@endsection