@extends('layouts.master')
@section('title', $product->name)

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="uploads/{{$product->pic}}" class="image-popup prod-img-bg"><img src="uploads/{{$product->pic}}" class="img-fluid" alt="{{$product->name}}"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$product->name}}</h3>
                <p class="price">
                    <span>{{number_format($product->price, 0, '', '.') . ' đ'}}</span>
                </p>
                <p>{{$product->short_desc}}</p>
                <div class="row mt-4">

                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">  
                        <input type="number" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                    </div>
                    <div class="w-100"></div>
                </div>

                <p><a href="{{route('addcart',$product->id)}}" class="btn btn-primary py-3 px-5"><i class="ion-ios-cart ml-1"></i> Chọn mua</a></p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Mô tả chi tiết</a>
                    <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Thông tin bổ sung</a>
                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <?php
                            echo ($product->desc);
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <?php
                            echo ($product->spec);
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection