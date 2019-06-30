@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
@if (session('thongbao'))
    <div class="alert alert-success" role="alert">
        {{ session('thongbao') }}
    </div>
@endif