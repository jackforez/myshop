@extends('page.layout.index')
@section('content')
<!-- breadcrumb -->
<div class="m-t-25">
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="page/trangchu" class="stext-109 cl8 hov-cl1 trans-04">
		Home
		<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<span class="stext-109 cl4">
		{{$sanpham->tensp}}
		</span>
	</div>
</div>
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="upload/{{$sanpham->img}}">
								<div class="wrap-pic-w pos-relative">
									<img src="upload/{{$sanpham->img}}">
									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sanpham->img}}">
									<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
							<div class="item-slick3" data-thumb="upload/{{$sanpham->img1}}">
								<div class="wrap-pic-w pos-relative">
									<img src="upload/{{$sanpham->img1}}" alt="IMG-PRODUCT">
									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sanpham->img1}}">
									<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
							<div class="item-slick3" data-thumb="upload/{{$sanpham->img2}}">
								<div class="wrap-pic-w pos-relative">
									<img src="upload/{{$sanpham->img2}}" alt="IMG-PRODUCT">
									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sanpham->img2}}">
									<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						{{$sanpham->tensp}}
					</h4>
					<span class="mtext-106 cl2">
						{{number_format($sanpham->giasp)}} VNĐ
					</span>
					<p class="stext-102 cl3 p-t-23">
						{{$sanpham->mota}}
					</p>

 					
					<div class="p-t-33">
						<form action="page/cart/add/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}" >
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>
										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num" value="1">
										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
								</div>
							</div>
                        	<button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 hov-btn1 p-lr-15 trans-04 js-addcart-detail form-control">Thêm vào giỏ hàng</button>
                     	</form>

					</div>
				</div>
			</div>
		</div>
</section>
<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
	<div class="container">
		<div class="p-b-45">
			<h3 class="ltext-106 cl5 txt-center">
				XEM THÊM
			</h3>
		</div>
		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				@foreach($tuongtu as $tt)
					@if($tt->tensp != $sanpham->tensp)
						<div class="block2 item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
							<div class="block2-pic hov-img0">
								<img src="upload/{{$tt->img}}" alt="IMG-PRODUCT">
								<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" data-toggle="modal" data-target="#{{$tt->id}}">
								Xem nhanh
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="page/chitiet/{{$tt->id}}" class="stext-301  hov-cl1 trans-04 js-name-detail p-b-6">
										{{$tt->tensp}}
									</a>
									
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="shop/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="shop/images/icons/icon-heart-02.png" alt="ICON">
									</a>
								</div>
								<div class="d-flex w-100">
									@if($tt->giakm>0)
										<div class="mr-auto mtext-103" style="text-decoration-line: line-through;">{{number_format($tt->giasp)}} Đ</div>
										<div class="mtext-103 cl11">{{number_format($tt->giakm)}} Đ</div>
									@else
										<div class="mtext-103 cl11">{{number_format($tt->giasp)}} Đ</div>
									@endif
								</div>
								<div class="block2-txt flex-w mt-3 w-100">
									<a class="flex-c-m stext-101 cl0 size-101 bg1 hov-btn1 p-lr-15 trans-04 js-addcart-detail form-control" href="page/cart/add/{{$tt->id}}">
										Thêm vào giỏ hàng
									</a>			
								</div>
							</div>
							
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</section>
</div>

@endsection