@extends('layouts.admin.master')
@section('title','Phê duyệt tài khoản')
    
@section('content')
@include('layouts.admin.sidebar')
<div role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Danh sách tài khoản đang chờ phê duyệt</div>

                    <div class="card-body table-responsive">

                        @include('thongbao')

                        <table class="table">
                            <tr>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Thời gian đăng ký</th>
                                <th></th>
                            </tr>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><a href="{{ route('admin.users.approve', $user->id) }}"
                                           class="btn btn-primary btn-smx">Phê duyệt</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Không tìm thấy tài khoản nào cần phê duyệt.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection