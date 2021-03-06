@extends('layouts.master')
@section('title', 'Liên hệ')

@section('content')
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span class="icon icon-map-marker"></span><span class="text"> {{config('shop.address')}}</span></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span class="icon icon-phone"></span><a href="tel://{{config('shop.phone')}}"> {{config('shop.phone')}}</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span class="icon icon-envelope"></span><a href="mailto:{{config('shop.email')}}"> {{config('shop.email')}}</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">                
                <form action="{{route('contact.post')}}" class="bg-white p-5 contact-form" method="post">                    
                    @include('error.note')
                    @include('thongbao')
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Tên của bạn"  required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Địa chỉ email"  required>
                    </div>
                    <div class="form-group">
                        <input name="subject" type="text" class="form-control" placeholder="Chủ đề"  required>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="" cols="30" rows="7" class="form-control" placeholder="Nội dung" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
            <div class="col-md-6 ">         
                <div class="d-flex align-content-center">
                <img src="images/contact-us.png" alt="" width="100%">
                </div>
       
            </div>
        </div>
    </div>
</section>
@endsection('content')