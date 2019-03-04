@extends('admin.layouts.glance')

@section('title')
    Quản trị sản phẩm
@endsection
@section('content')
    <h1>Quản trị sản phẩm</h1>
    <div style="margin: 20px 0">
        <a href="{{url('admin/shop/product/create')}}" class="btn btn-success">Thêm danh mục</a>
    </div>

    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số :</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Images</th>
                    <th>Intro</th>
                    <th>Desc</th>
                    <th>Price Core</th>
                    <th>Price Sale</th>
                    <th>Stock</th>
                    <th>Cat_id</th>
                    <th>Note</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->images }}</td>
                        <td>{{ $product->intro }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>{{ $product->priceCore }}</td>
                        <td>{{ $product->priceSale }}</td>
                        <td>{{ $product->stock }}</td>

                        <td>
                            <a href="{{ url('/admin/shop/product/'.$product->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/admin/shop/product/'.$product->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
