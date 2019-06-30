@extends('layouts.master')
@section('title', 'Thanh toán')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <div class="row mb-4 pt-3 d-flex">
                    <div class="col-md-6">
                        <div class="cart-detail shadow-sm p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2" checked="checked"> Thanh toán tiền mặt khi nhận hàng</label>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="cart-detail cart-total shadow-sm p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Thông tin giỏ hàng</h3>
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
                    </div>

                </div>
                <form class="billing-form" method="post">
                    <h3 class="mb-4 billing-heading">Thông tin giao hàng</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lastname">Họ tên</label>
                                <input type="text" class="form-control" placeholder="Điền họ tên khách hàng" required name="name">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Tỉnh/Thành phố</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" required name="city">
                                        <option value="294">Hồ Chí Minh</option>
                                        <option value="297">Hà Nội</option>
                                        <option value="291">Đà Nẵng</option>
                                        <option value="278">An Giang</option>
                                        <option value="280">Bà Rịa - Vũng Tàu</option>
                                        <option value="282">Bắc Giang</option>
                                        <option value="281">Bắc Kạn</option>
                                        <option value="279">Bạc Liêu</option>
                                        <option value="283">Bắc Ninh</option>
                                        <option value="284">Bến Tre</option>
                                        <option value="285">Bình Dương</option>
                                        <option value="286">Bình Phước</option>
                                        <option value="287">Bình Thuận</option>
                                        <option value="316">Bình Định</option>
                                        <option value="289">Cà Mau</option>
                                        <option value="290">Cần Thơ</option>
                                        <option value="288">Cao Bằng</option>
                                        <option value="293">Gia Lai</option>
                                        <option value="295">Hà Giang</option>
                                        <option value="296">Hà Nam</option>
                                        <option value="299">Hà Tĩnh</option>
                                        <option value="300">Hải Dương</option>
                                        <option value="301">Hải Phòng</option>
                                        <option value="319">Hậu Giang</option>
                                        <option value="302">Hoà Bình</option>
                                        <option value="320">Hưng Yên</option>
                                        <option value="321">Khánh Hòa</option>
                                        <option value="322">Kiên Giang</option>
                                        <option value="323">Kon Tum</option>
                                        <option value="304">Lai Châu</option>
                                        <option value="306">Lâm Đồng</option>
                                        <option value="305">Lạng Sơn</option>
                                        <option value="324">Lào Cai</option>
                                        <option value="325">Long An</option>
                                        <option value="326">Nam Định</option>
                                        <option value="327">Nghệ An</option>
                                        <option value="307">Ninh Bình</option>
                                        <option value="328">Ninh Thuận</option>
                                        <option value="329">Phú Thọ</option>
                                        <option value="308">Phú Yên</option>
                                        <option value="309">Quảng Bình</option>
                                        <option value="310">Quảng Nam</option>
                                        <option value="311">Quảng Ngãi</option>
                                        <option value="330">Quảng Ninh</option>
                                        <option value="312">Quảng Trị</option>
                                        <option value="313">Sóc Trăng</option>
                                        <option value="331">Sơn La</option>
                                        <option value="332">Tây Ninh</option>
                                        <option value="333">Thái Bình</option>
                                        <option value="334">Thái Nguyên</option>
                                        <option value="335">Thanh Hóa</option>
                                        <option value="303">Thừa Thiên Huế</option>
                                        <option value="336">Tiền Giang</option>
                                        <option value="314">Trà Vinh</option>
                                        <option value="315">Tuyên Quang</option>
                                        <option value="337">Vĩnh Long</option>
                                        <option value="338">Vĩnh Phúc</option>
                                        <option value="339">Yên Bái</option>
                                        <option value="292">Đắk Lắk</option>
                                        <option value="340">Đắk Nông</option>
                                        <option value="341">Điện Biên</option>
                                        <option value="317">Đồng Nai</option>
                                        <option value="318">Đồng Tháp</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Địa chỉ</label>
                                <input type="text" class="form-control" placeholder="Số nhà, đường, phường/xã, quận/huyện" required name="address">
                            </div>
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Điện thoại</label>
                                <input type="tel" class="form-control" placeholder="" required name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Địa chỉ email</label>
                                <input type="email" class="form-control" placeholder="" required name="email">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <p>
                                <button type="submit" class="btn btn-primary py-3 px-4 checkout-btn">ĐẶT MUA</button>
                            </p>
                        </div> 
                    </div>
                    {{csrf_field()}}
                </form><!-- END -->


            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->
@endsection