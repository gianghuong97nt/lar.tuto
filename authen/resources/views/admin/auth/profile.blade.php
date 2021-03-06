@extends('admin.layouts.glance')
@section('title')
    Thông tin cá nhân
@endsection
@section('link')
    <link href="{{asset('admin_assets/css/info.css')}}" rel='stylesheet' type='text/css' />
@endsection
@section('tag')
    {{--<script src="{{ asset('admin_assets/js/info.js') }}"></script>--}}
@endsection
@section('content')
    <div class="forms tables">
        <div class="row">
            <div class="d-inline">
                <h2 class="title1">Thông tin cá nhân</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 btn-btn d-inline">
                <a><button type="button" class="btn btn-success btn-2 btn-back" href="/">Back</button></a>
                <button type="button" class="btn btn-success btn-2" name="btn-save-info">Save</button>
            </div>
        </div>
        <div class="form-grids row widget-shadow">
            <div>
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Tên</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="userName" value="" disabled maxlength="20"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Email</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="email" class="form-control" id="email" value="" maxlength="50"/>
                            <span class="error display_view" id="invalid_email"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">SĐT</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="tel" class="form-control" id="phone" value="" maxlength="12"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Ngày sinh</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="date" class="form-control" id="birthday" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Địa chỉ</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="address" value="" maxlength="50"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Giới tính</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" id="gender">
                                <option value="2"></option>
                                {{--<option {{$user[0]['gender']==0?'selected':''}} value="0">Male</option>--}}
                                {{--<option {{$user[0]['gender']==1?'selected':''}} value="1">Female</option>--}}
                                <option value="0">Male</option>
                                <option value="1">Famale</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Ảnh</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div style="" id="avatar">
                                <img style="width: 100%; height: 100%; margin-left: 0px" id="preview_image" src="{{isset($user[0]['avata'])&&$user[0]['avata']!=''?'uploads/'.$user[0]['avata']:'uploads/default.jpg'}}" />
                                <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                            </div>
                            <p>
                                <a href="javascript:changeProfile()" style="text-decoration: none;">
                                    <i class="glyphicon glyphicon-edit"></i> Change
                                </a>&nbsp;&nbsp;
                                <a href="javascript:removeFile()" style="color: red;text-decoration: none;">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    Remove
                                </a>
                            </p>
                            <input type="file" id="file" style="display: none"/>
                            <input type="hidden" id="file_name" value="{{isset($user[0]['avata'])? $user[0]['avata']:''}}"/>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
