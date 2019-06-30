@extends('layouts.admin.master')
@section('title','Đổi mật khẩu ')
@section('content')
@include('layouts.admin.sidebar')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Đổi mật khẩu</div>

                    <div class="card-body">
                        @include('error.note')
                        @include('thongbao')
                        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                            {{ csrf_field() }}

                            <div class="row form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label text-md-right">Mật khẩu hiện tại</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label text-md-right">Mật khẩu mới</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="new-password-confirm" class="col-md-4 control-label text-md-right">Nhập lại mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Đổi mật khẩu
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection