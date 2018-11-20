@extends('page.layout.index')
@section('content')
<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			@foreach($slide as $sl)
			<div class="item-slick1" style="background-image: url(upload/slides/{{$sl->link}});">
				<div class="container">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								{{$sl->slogan}}
							</h2>
						</div>
						<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
							Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
<div class="container">
<div class="p-b-10">
	<h2 class="cl5">
		<b>Danh sách sản phẩm</b>
	</h2>
</div>
<div class="flex-w flex-sb-m p-b-52">
	<div class="flex-w flex-l-m filter-tope-group m-tb-10">
		<button class="cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
			<h5>Tất cả</h5>
		</button>
		<button class="cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".vonggo">
			<h5>Vòng gỗ</h5>
		</button>
		<button class="cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bilan">
			<h5>Bi lăn tay</h5>
		</button>
	</div>
</div>
<div class="row isotope-grid">
	@foreach($sanpham as $sp)
	<div class="modal" id="{{$sp->id}}" style="background-color:black;z-index:9999;">
		<div class="modal-dialog modal-lg w-full">
			<div class="modal-content">
				<div class="modal-body">
					<!-- <div class="row">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-4">
									<img src="upload/{{$sp->img}}" alt="hinh 1" width="100%" >	
								</div>
								<div class="col-md-4">
									<img src="upload/{{$sp->img1}}" alt="hinh 2" width="100%" >	
								</div>
								<div class="col-md-4">
									<img src="upload/{{$sp->img2}}" alt="hinh 3" width="100%" >	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<img src="upload/{{$sp->img}}" alt="hinh 1" width="100%" >	
								</div>
								
							</div>
						</div>
						<div class="col-md-5 col-lg-5 p-b-30">
							<div class="p-r-50 p-t-5 p-lr-0-lg">
								<h4 class="mtext-105 cl2 js-name-detail p-b-14">
									{{$sp->tensp}}
								</h4>
								<span class="mtext-106 cl2">
								{{$sp->giasp}}
								</span>
								<p class="stext-102 cl3 p-t-23">
									{{$sp->mota}}
								</p>
								<div class="p-t-33">
									<div class="flex-c-m p-b-10">
										<div class="size-204 flex-w flex-c-m respon6-next" >
											<div class="wrap-num-product flex-w m-tb-10" >
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>
												<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="flex-w flex-c-m">
									<button class="btn btn-primary hov-btn1 p-lr-15 trans-04 js-addcart-detail form-control" >
										Thêm vào giỏ hàng
									</button>
								</div>
							</div>
						</div>
					</div> -->
					<div class="container">
						<div class="row">
							<div class="col-2">
								<ul>
									<li><img src="upload/{{$sp->img}}" alt="" width="75px"></li>
									<li><img src="upload/{{$sp->img1}}" alt="" width="75px"></li>
									<li><img src="upload/{{$sp->img2}}" alt="" width="75px"></li>
								</ul>
							</div>
							<div class="col-6">
								<img src="upload/{{$sp->img}}" alt="">	
							</div>
							<div class="col-4">
								<div class="p-r-50 p-t-5 p-lr-0-lg">
									<h4 class="mtext-105 cl2 js-name-detail p-b-14">
										{{$sp->tensp}}
									</h4>
									<span class="mtext-106 cl2">
									{{$sp->giasp}}
									</span>
									<p class="stext-102 cl3 p-t-23">
										{{$sp->mota}}
									</p>
									<div class="p-t-33">
										<div class="flex-c-m p-b-10">
											<div class="size-204 flex-w flex-c-m respon6-next" >
												<div class="wrap-num-product flex-w m-tb-10" >
													<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-minus"></i>
													</div>
													<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
													<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-plus"></i>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<div class="flex-w flex-c-m">
										<button class="btn btn-primary hov-btn1 p-lr-15 trans-04 js-addcart-detail form-control my-cart-btn" data-id="{{$sp->id}}" data-name="{{$sp->tensp}}" data-summary="{{$sp->mota}}" data-price="50" data-quantity="1" data-image="{{$sp->img}}" >
											Thêm vào giỏ hàng
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- items -->
	<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
		<!-- Block2 -->
		<div class="block2">
			<div class="block2-pic hov-img0">
				<img src="upload/{{$sp->img}}" alt="IMG-PRODUCT">
				<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" data-toggle="modal" data-target="#{{$sp->id}}">
				Xem nhanh
				</a>
			</div>
			<div class="block2-txt flex-w flex-t p-t-14">
				<div class="block2-txt-child1 flex-col-l ">
					<a href="page/chitiet/{{$sp->id}}">{{$sp->tensp}}</a>
					<h4  style="color:orange;">{{$sp->giasp}}</h4>
				</div>
				<div class="block2-txt-child2 flex-r p-t-3">
					<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="shop/images/icons/icon-heart-01.png" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="shop/images/icons/icon-heart-02.png" alt="ICON">
					</a>
				</div>
			</div>
			<div class="block2-txt flex-w mt-3">
				<a class="btn btn-primary hov-btn1 p-lr-15 trans-04 js-addcart-detail w-100" href="page/cart/add/{{$sp->id}}">
					Thêm vào giỏ hàng
				</a>			
			</div>
		</div>
	</div>
	@endforeach 
</div>
<div class="row">{{$sanpham->links()}}</div>
@endsection