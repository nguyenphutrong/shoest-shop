@extends('layouts.admin.master')

@section('title','Chi tết đơn hàng')

@section('content')
<?php use \App\ShoppingCart; ?>
@include('layouts.admin.sidebar')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">Đơn hàng : {{$order->identifier}}</h1>
                <a href="javascript:history.back()" class="btn btn-primary my-3">Trở lại danh sách</a>
                @include('thongbao')
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <a class="" data-toggle="collapse" href="#orderList" role="button" aria-expanded="false" aria-controls="orderList">
                            Chi tiết đơn hàng
                        </a>
                    </div>
                    <div class="collapse show" id="orderList">
                        <div class="card-body" class="table-responsive">
                            <table class="table table-bordered" id="myTable">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th width="20%">&nbsp;</th>
                                        <th>Sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $content = unserialize(base64_decode(data_get($order, 'content'))); ?>
                                    @foreach($content as $row)
                                    <tr class="text-center">

                                        <td class="image-prod">
                                            <img src="uploads/{{$row->options->pic}}" alt="" width="100%">
                                        </td>

                                        <td class="product-name">
                                            {{$row->name}}
                                        </td>

                                        <td class="price">{{number_format($row->price, 0, '', '.') . ' đ'}}</td>

                                        <td class="quantity">{{$row->qty}}</td>
                                        <td class="total">{{number_format($row->total, 0, '', '.') . ' đ'}}</td>

                                    </tr><!-- END TR-->
                                    @endforeach
                                    <tr>
                                        <td>Tổng tiền:</td>
                                        <td colspan="5" align="right"><strong>{{number_format(ShoppingCart::getOrderItemTotal($order), 0, '', '.') . ' đ'}}</strong></td>
                                    </tr>
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