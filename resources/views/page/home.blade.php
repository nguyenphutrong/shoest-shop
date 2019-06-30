@extends('layouts.master')
@section('title', 'Trang chủ')

@section('content')
<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		@foreach($slides as $slide)
		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container-fluid p-0">
				<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
					<img class="one-third order-md-last img-fluid" src="uploads/{{$slide->pic}}" alt="">
					<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#New Arrival</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3"><span>{{$slide->title}}</span></h1>
				            <p class="mb-4">{{$slide->desc}}</p>				            
				            <p><a href="#newest" class="btn-custom">Xem ngay</a></p>
				          </div>
		            </div>
		          </div>
				</div>
			</div>
		</div>
		@endforeach	

	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row no-gutters ftco-services">
			<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services p-4 py-md-5">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-bag"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">GIAO HÀNG MIỄN PHÍ</h3>
						<p>Giao hàng tận nơi, miễn phí trên toàn quốc.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services p-4 py-md-5">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">HỖ TRỢ KHÁCH HÀNG</h3>
						<p>Tư vấn tận tình, hỗ trợ đổi hàng.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services p-4 py-md-5">
					<div class="icon d-flex justify-content-center align-items-center mb-4">
						<span class="flaticon-payment-security"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">BẢO MẬT THANH TOÁN</h3>
						<p>Cam kết bảo mật hoàn toàn thông tin của khách hàng.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light" id="newest">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">SẢN PHẨM MỚI</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			@foreach($products as $product)
			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
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
								<span class="money">{{number_format($product->price, 0, '', '.') . ' đ'}}
								</span>
							</p>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="{{route('addcart',$product->id)}}" class="add-to-cart text-center py-2 mr-1"><span><i class="ion-ios-cart ml-1"></i> Chọn mua</span></a>
						</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 text-center md-5">
				<h3 class=""><a href="{{route('cua-hang','tat-ca')}}" class="btn btn-primary p-3">Xem tất cả sản phẩm</a></h3>
			</div>
		</div>
	</div>
</section>

@endsection