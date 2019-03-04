@extends('admin.layouts.glance')

@section('title')
    Quản trị danh mục sản phẩm
@endsection
@section('content')
    <h1>Quản trị danh mục sản phẩm</h1>
    <div style="margin: 20px 0">
        <a href="{{url('admin/content/category/create')}}" class="btn btn-success">Thêm danh mục</a>
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
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cats as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>{{ $cat->images }}</td>
                        <td>{{ $cat->intro }}</td>
                        <td>{{ $cat->desc }}</td>
                        <td>
                            <a href="{{ url('/admin/content/category/'.$cat->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/admin/content/category/'.$cat->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $cats->links() }}
        </div>
    </div>
@endsection