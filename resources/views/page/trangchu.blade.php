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
		<button class="cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
			<h5>Vòng gỗ</h5>
		</button>
		<button class="cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
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
									<li><img src="upload/{{$sp->img}}" alt="" width="75px"></li>
									<li><img src="upload/{{$sp->img}}" alt="" width="75px"></li>
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
					<a href="page/chitiet/{{$sp->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					{{$sp->tensp}}
					</a>
					<span class="stext-105 cl3">
					{{$sp->giasp}}
					</span>
				</div>
				<div class="block2-txt-child2 flex-r p-t-3">
					<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="shop/images/icons/icon-heart-01.png" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="shop/images/icons/icon-heart-02.png" alt="ICON">
					</a>
				</div>
			</div>
			<div class="col">
				<button class="btn btn-primary hov-btn1 p-lr-15 trans-04 my-cart-btn" data-id="{{$sp->id}}" data-name="{{$sp->tensp}}" data-summary="{{$sp->mota}}" data-price="50" data-quantity="1" data-image="{{$sp->img}}" >
					Thêm vào giỏ hàng
				</button>
			</div>
		</div>
	</div>
	<!-- modal -->
	<!-- <div class="modal" id="{{$sp->id}}" style="background-color:black;z-index:9999;">
		<div class="modal-dialog modal-lg">
			<div class="container">
				<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
					<button class="how-pos3 hov3 trans-04" data-dismiss="modal">
					<img src="shop/images/icons/icon-close.png" alt="CLOSE">
					</button>
					<div class="row">
						<div class="col-md-6 col-lg-7 p-b-30">
							<div class="p-l-25 p-r-30 p-lr-0-lg">
								<div class="wrap-slick3 flex-sb flex-w">
									<div class="wrap-slick3-dots"></div>
									<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
									<div class="slick3 gallery-lb" style="background-image: url('upload/{{$sp->img}}');background-repeat: no-repeat;">
										<div class="item-slick3" data-thumb="shop/upload/{{$sp->img}}">
											<div class="wrap-pic-w pos-relative" >
												<img src="upload/{{$sp->img}}" alt="IMG-PRODUCT">
												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sp->img}}">
												<i class="fa fa-expand"></i>
												</a>
											</div>
										</div>
										<div class="item-slick3" data-thumb="upload/{{$sp->img1}}">
											<div class="wrap-pic-w pos-relative">
												<img src="upload/{{$sp->img1}}">
												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sp->img1}}">
												<i class="fa fa-expand"></i>
												</a>
											</div>
										</div>
										<div class="item-slick3" data-thumb="upload/{{$sp->img2}}">
											<div class="wrap-pic-w pos-relative">
												<img src="upload/{{$sp->img2}}" alt="hình ảnh sản phẩm">
												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sp->img2}}">
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
					</div>
				</div>
			</div>
		</div>
	</div>  -->
	@endforeach 
</div>
<div class="row">{{$sanpham->links()}}</div>
<!-- <div class="modal" id="my-modal" style="background-color:black;z-index:9999;">
		<div class="modal-dialog modal-lg">
			<div class="container">
				<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
					<button class="how-pos3 hov3 trans-04" data-dismiss="modal">
					<img src="shop/images/icons/icon-close.png" alt="CLOSE">
					</button>
					<div class="row">
						<div class="col-md-6 col-lg-7 p-b-30">
							<div class="p-l-25 p-r-30 p-lr-0-lg">
								<div class="wrap-slick3 flex-sb flex-w">
									<div class="wrap-slick3-dots"></div>
									<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
									<div class="slick3 gallery-lb" style="background-image: url('upload/{{$sp->img}}');background-repeat: no-repeat;">
										<div class="item-slick3" data-thumb="">
											<div class="wrap-pic-w pos-relative" >
												<img src="" alt="IMG-PRODUCT" id="spimg">
												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sp->img}}">
												<i class="fa fa-expand"></i>
												</a>
											</div>
										</div>
										<div class="item-slick3" data-thumb1="">
											<div class="wrap-pic-w pos-relative">
												<img src="" id="spimg1">
												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sp->img1}}">
												<i class="fa fa-expand"></i>
												</a>
											</div>
										</div>
										<div class="item-slick3" data-thumb2="">
											<div class="wrap-pic-w pos-relative">
												<img src="" alt="hình ảnh sản phẩm" id="spimg2">
												<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/{{$sp->img2}}">
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
					</div>
				</div>
			</div>
		</div>
	</div>  -->
@endsection
@section('my-script')
<script>
	$(function () {

var goToCartIcon = function($addTocartBtn){
  var $cartIcon = $(".my-cart-icon");
  var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
  $addTocartBtn.prepend($image);
  var position = $cartIcon.position();
  $image.animate({
	top: position.top,
	left: position.left
  }, 500 , "linear", function() {
	$image.remove();
  });
}

$('.my-cart-btn').myCart({
  currencySymbol: '$',
  classCartIcon: 'my-cart-icon',
  classCartBadge: 'my-cart-badge',
  classProductQuantity: 'my-product-quantity',
  classProductRemove: 'my-product-remove',
  classCheckoutCart: 'my-cart-checkout',
  affixCartIcon: true,
  showCheckoutModal: true,
  numberOfDecimals: 2,
  cartItems: [
	{id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
	{id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
	{id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}
  ],
  clickOnAddToCart: function($addTocart){
	goToCartIcon($addTocart);
  },
  afterAddOnCart: function(products, totalPrice, totalQuantity) {
	console.log("afterAddOnCart", products, totalPrice, totalQuantity);
  },
  clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
	console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
  },
  checkoutCart: function(products, totalPrice, totalQuantity) {
	var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
	checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
	$.each(products, function(){
	  checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
	});
	alert(checkoutString)
	console.log("checking out", products, totalPrice, totalQuantity);
  },
  getDiscountPrice: function(products, totalPrice, totalQuantity) {
	console.log("calculating discount", products, totalPrice, totalQuantity);
	return totalPrice * 0.5;
  }
});

$("#addNewProduct").click(function(event) {
  var currentElementNo = $(".row").children().length + 1;
  $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
});
});
</script>
@endsection