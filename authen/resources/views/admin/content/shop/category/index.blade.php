@extends('admin.layouts.glance')

@section('title')
    Quản trị danh mục sản phẩm
@endsection
@section('content')
    <h1>Quản trị danh mục sản phẩm</h1>
    <div style="margin: 20px 0">
        <a href="{{url('admin/shop/category/create')}}" class="btn btn-success">Thêm danh mục</a>
    </div>

    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số :</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
