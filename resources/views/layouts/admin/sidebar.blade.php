<style>
    .nav-link{
        color: #ffffff;
    }
    .nav-link:hover{
        color: #ecf0f1;
    }
    ul.nav li.divider {
        border-bottom: 1px solid #eee;
        margin: .5rem 0;
    }
</style>
<nav class="col-md-2 d-none d-md-block bg-primary pt-4 position-fixed h-100" id="sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin')}}">
                    <span class="icon ion-md-home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li role="presentation" class="divider"></li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">
                    <span class="icon ion-md-folder"></span>
                    Danh mục
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.index')}}">
                    <span class="icon ion-md-cube"></span>
                    Sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('slide.index')}}">
                    <span class="icon ion-md-images"></span>
                    Slide
                </a>
            </li>       
            <li role="presentation" class="divider"></li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('order.index')}}">
                    <span class="icon ion-md-barcode"></span>
                    Đơn hàng
                </a>
            </li>       
            @if (Auth::user()->admin)
            <li role="presentation" class="divider"></li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.users.index')}}">
                    <span class="icon ion-md-person"></span>
                    Phê duyệt tài khoản
                </a>
            </li>
            @endif
            
        </ul>
    </div>
</nav>