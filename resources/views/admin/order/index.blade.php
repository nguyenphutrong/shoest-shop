@extends('layouts.admin.master')

@section('title','Danh sách đơn hàng')

@section('content')
<?php use \App\ShoppingCart; ?>
@include('layouts.admin.sidebar')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">Đơn hàng</h1>
                @include('thongbao')
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <a class="" data-toggle="collapse" href="#orderList" role="button" aria-expanded="false" aria-controls="orderList">
                            Danh sách đơn hàng
                        </a>
                    </div>
                    <div class="collapse show" id="orderList">
                        <div class="card-body" class="table-responsive">
                            <table class="table table-bordered" id="myTable">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>Id</th>
                                        <th>Thời gian đặt hàng</th>
                                        <th>Số lượng hàng hóa</th>
                                        <th>Thành tiền</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->identifier}}</td>     
                                        <td>{{$order->created_at}}</td>                                                                           
                                        <td>{{ShoppingCart::getOrderItemCount($order)}}</td>
                                        <td>{{number_format(ShoppingCart::getOrderItemTotal($order), 0, '', '.') . ' đ'}}</td>                                
                                        <td align="center"><a href="{{route('order.detail',$order->identifier)}}" class="btn btn-primary">Xem chi tiết</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection