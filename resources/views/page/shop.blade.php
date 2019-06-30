@extends('layouts.master')
@section('title', 'Sản phẩm')

@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-10 order-md-last">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase"><?php 
                        if(isset($category)){
                            echo $category->name . ":";
                        }else {
                            echo "Tất cả sản phẩm:";
                        } ?></h3>
                    </div>
                    @if(count($products) == 0)
                    <div class="col-12">
                        <p>Chưa có sản phẩm</p>
                    </div>
                    @endif

                    @foreach($products as $product)
                    <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                        <div class="product d-flex flex-column">
                            <a href="{{route('san-pham',$product->id)}}" class="img-prod"><img class="img-fluid" src="uploads/{{$product->pic}}" alt="{{$product->name}}">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3">
                                <div class="d-flex">
                                    <div class="cat">
                                        <span>{{$product->category->name}}</span>
                                    </div>
                                    <div class="rating">
                                        <p class="text-right mb-0">
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <h3><a href="{{route('san-pham',$product->id)}}">{{$product->name}}</a></h3>
                                <div class="pricing">
                                    <p class="price">
                                        <span>{{number_format($product->price, 0, '', '.') . ' đ'}}
                                        </span>
                                    </p>
                                </div>
                                <p class="bottom-area d-flex px-3">
                                <a href="{{route('addcart',$product->id)}}" class="add-to-cart text-center py-2 mr-1"><span><i class="ion-ios-cart ml-1"> Chọn mua</i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="sidebar">
                    <div class="sidebar-box-2">
                        <h2 class="heading">DANH MỤC</h2>
                        <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
        
                                            <div class="panel-body">
                                                <ul>                                            
                                                    <li><a href="cua-hang/tat-ca">Tất cả</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            @foreach($categories as $cat)
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">

                                    <div class="panel-body">
                                        <ul>                                            
                                            <li><a href="cua-hang/{{$cat->id}}">{{$cat->name}}</a></li>
                                        </ul>
                                    </div>
                                    <!-- 
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{$cat->name}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Sport</a></li>
                                                <li><a href="#">Casual</a></li>
                                                <li><a href="#">Running</a></li>
                                                <li><a href="#">Jordan</a></li>
                                                <li><a href="#">Soccer</a></li>
                                                <li><a href="#">Football</a></li>
                                                <li><a href="#">Lifestyle</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection