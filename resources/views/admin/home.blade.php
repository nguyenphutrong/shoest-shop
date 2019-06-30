@extends('layouts.admin.master')

@section('title','Dashboard')

@section('content')
@include('layouts.admin.sidebar')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">  
        <div class="row">
            <div class="col">
                <h2>Chào mừng bạn đã đến với trang quản trị của Shoest!</h2>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{route('category.index')}}" style="text-decoration: none;">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Danh mục</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$category}}</div>
                        </div>
                        <div class="col-auto">
                            <span class="icon ion-md-list text-primary" style="font-size:32px;"></span>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
                
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{route('product.index')}}" style="text-decoration: none;">
                    <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sản phẩm</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$product}}</div>
                        </div>
                        <div class="col-auto">
                            <span class="icon ion-md-pricetags text-success" style="font-size:32px;"></span>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{route('order.index')}}" style="text-decoration: none;">         
                    <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Đơn hàng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$cart}}</div>
                        </div>
                        <div class="col-auto">
                            <span class="icon ion-md-cart text-warning" style="font-size:32px;"></span>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tổng doanh thu</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($revenue, 0, '', '.') . ' đ'}}</div>
                    </div>
                    <div class="col-auto">
                        <span class="icon ion-md-cash text-danger" style="font-size:32px;"></span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </div>
</main>

@endsection