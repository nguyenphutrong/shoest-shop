<section class="ftco-section contact-section ">
    <div class="container">
        <div>
            <h2>Cảm ơn khách hàng {{$info['name']}} đã đặt hàng tại Shoest</h2>
            <p>Đơn hàng của khách hàng đã được tiếp nhận và đang trong quá trình xử lý</p>
        </div>
        <div id="khach-hang">
            <h4>Thông tin khách hàng</h4>
            <p>
                <span class="info">Khách hàng: </span>
                <strong>{{$info['name']}} </strong>                
            </p>
            <p>
                <span class="info">Email: </span>
                <strong>{{$info['email']}} </strong>
            </p>
            <p>
                <span class="info">Điện thoại: </span>
                <strong>{{$info['phone']}} </strong>    
            </p>
            <p>
                <span class="info">Địa chỉ: </span>
                <strong>{{$info['address']}} </strong>
            </p>
        </div>
        <div id="hoa-don">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <h4>Hóa đơn mua hàng</h4>
                    <div class="cart-list">
                        <table border="1" cellspacing="0">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $item)
                                <tr class="text-center">

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(uploads/{{$item->options->pic}});"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>{{$item->name}}</h3> 
                                    </td>

                                    <td class="price">{{number_format($item->price, 0, '', '.') . ' đ'}}</td>

                                    <td class="quantity">{{$item->qty}}</td>

                                    <td class="total">{{number_format($item->price * $item->qty, 0, '', '.') . ' đ'}}</td>
                                </tr><!-- END TR-->                                
                                @endforeach
                                <tr>
                                    <td>Tổng tiền:</td>
                                    <td colspan="4" align="right">{{$carttotal}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="xac-nhan">
                <br>
                <p align="justify">
                    <ul>
                        <li>Sản phẩm của khách hàng sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</li>
                        <li>Nhân viên giao hàng sẽ liên hệ với khách hàng qua Số Điện thoại trước khi giao hàng 24 tiếng.</li>
                    </ul>              
                    <strong><br />Cám ơn khách hàng đã sử dụng Sản phẩm của cửa hàng chúng tôi!</strong>
                </p>
            </div>
        </div>
</section>