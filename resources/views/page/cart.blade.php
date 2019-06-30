@extends('layouts.master')
@section('title', 'Giỏ hảng')

@section('content')

<script>
    function updateCart(rowId, qty) {
        $.get(
            '{{route('updatecart')}}', 
            {
                rowId: rowId,
                qty: qty
            },
            function() {
                location.reload();
            }
        );
    }
</script>

<section class="ftco-section ftco-cart">
    <div class="container">

        @if(Cart::count() >= 1)

        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $row)
                            <tr class="text-center">

                                <td class="image-prod">
                                    <div class="img" style="background-image:url(uploads/{{$row->options->pic}});"></div>
                                </td>

                                <td class="product-name">
                                    <h3>{{$row->name}}</h3>
                                </td>

                                <td class="price">{{number_format($row->price, 0, '', '.') . ' đ'}}</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="number" name="quantity" class="quantity form-control input-number" value="{{$row->qty}}" min="1" max="100" onchange="updateCart('{{$row->rowId}}',this.value)">
                                    </div>
                                </td>

                                <td class="total">{{number_format($row->price*$row->qty, 0, '', '.') . ' đ'}}</td>
                                <td class="product-remove"><a href="{{route('removecart',$row->rowId)}}"><span class="ion-ios-close"></span></a></td>
                            </tr><!-- END TR-->
                            @endforeach
                            <tr>
                                <td>Tổng tiền:</td>
                                <td colspan="5" align="right"><strong>{{Cart::total()}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3></h3>
                    <p class="d-flex">
                        <span>Tạm tính</span>
                        <span>{{Cart::total()}}</span>
                    </p>
                    <p class="d-flex">
                        <span>Giao hàng</span>
                        <span>0 đ</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Thành tiền</span>
                        <span>{{Cart::total()}}</span>
                    </p>
                </div>
                <p class="text-center"><a href="{{route('thanh-toan')}}" class="btn btn-primary py-3 px-4">Tiến hành thanh toán</a></p>
            </div>
        </div>
        @else
        <h3>Giỏ hàng rỗng</h3>
        @endif
    </div>
</section>
@endsection