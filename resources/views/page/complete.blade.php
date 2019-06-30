@extends('layouts.master')
@section('title', 'Đặt hàng thành công')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 img img-2 d-flex justify-content-center align-items-center"">
                <img src=" images/thank-you.png" alt="">
            </div>
            <div class="col-md-7  wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Quý khách đã đặt hàng thành công</h2>
                    </div>
                </div>
                <div class="pb-md-5 pb-4">
                    <p align="justify">
                        <ul>
                            <li>Sản phẩm của khách hàng sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</li>
                            <li>Nhân viên giao hàng sẽ liên hệ với khách hàng qua Số Điện thoại trước khi giao hàng 24 tiếng.</li>
                        </ul>
                        <strong><br />Cám ơn khách hàng đã sử dụng Sản phẩm của cửa hàng chúng tôi!</strong>
                    </p>
                    <p><a href="{{route('cua-hang','tat-ca')}}" class="btn btn-primary">Tiếp tục mua sắm</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection