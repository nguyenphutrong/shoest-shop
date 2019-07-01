<div class="py-1 bg-black">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">{{config('shop.phone')}}</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">{{config('shop.email')}}</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">Giao hàng trong 2-3 ngày &amp; Đổi trả miễn phí</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="" href="{{route('trang-chu')}}"><img src="images/logo.png" height="26px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('trang-chu')}}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{route('cua-hang','tat-ca')}}">Tất cả sản phẩm</a>  
                        @foreach($categories as $cat)
                            <a class="dropdown-item" href="{{route('cua-hang',$cat->id)}}">{{$cat->name}} ({{$cat->products->count()}})</a>                
                        @endforeach
                    </div>
                </li>                
                <li class="nav-item"><a href="{{route('gioi-thieu')}}" class="nav-link">Giới thiệu</a></li>
                <li class="nav-item"><a href="{{route('lien-he')}}" class="nav-link">Liên hệ</a></li>
                <li class="nav-item cta cta-colored"><a href="{{route('gio-hang')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{Cart::count()}}]</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->