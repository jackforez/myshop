<body class="animsition">
   <!-- Header -->
   <header>
      <!-- Header desktop -->
      <div class="container-menu-desktop">
         <!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
					
					</div>

					<div class="right-top-bar flex-w h-full">
					</div>
				</div>
			</div>

         <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
               <!-- Logo desktop -->		
               <a href="page/trangchu" class="logo">
                  <img src="" alt="IMG-LOGO">
               </a>
               <!-- Menu desktop -->
               <div class="menu-desktop">
                  <ul class="main-menu">
                     <li class="active-menu">
                        <a href="page/trangchu">Trang chủ</a>
                     </li>  
                     <li>
                        <a href="shop/about.html">Bài viết</a>
                     </li>
                     <li>
                        <a href="shop/about.html">Giới thiệu về shop</a>
                     </li>
                     <li>
                        <a href="shop/contact.html">Liên hệ với shop</a>
                     </li>
                  </ul>
               </div>
               <!-- Icon header -->
             
               <div class="wrap-icon-header flex-w flex-r-m">
                  <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                     <i class="zmdi zmdi-search"></i>
                  </div>
                  @if(Session::has('cart'))
                     <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{Session('cart')->totalQty}}">
                        <i class="zmdi zmdi-shopping-cart my-cart-icon"></i>
                     </div>
                  @else
                     <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
                        <i class="zmdi zmdi-shopping-cart my-cart-icon"></i>
                     </div>
                  @endif
                  <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                     <i class="zmdi zmdi-favorite-outline"></i>
                  </a>
                  <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
						   <i class="zmdi zmdi-account"></i>
				      </div>
               </div>
            </nav>
         </div>
      </div>
      <!-- Header Mobile -->
      <div class="wrap-header-mobile">
         <!-- Logo moblie -->		
         <div class="logo-mobile">
            <a href="page/trangchu"><img src="shop/images/icons/logo-01.png" alt="IMG-LOGO"></a>
         </div>
         <!-- Icon header -->
         <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
               <i class="zmdi zmdi-search"></i>
            </div>
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
               <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
               <i class="zmdi zmdi-favorite-outline"></i>
            </a>
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
					<i class="zmdi zmdi-account"></i>
				</div>
         </div>
         <!-- Button show menu -->
         <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
         </div>
      </div>
      <!-- Menu Mobile -->
      <div class="menu-mobile">
			<ul class="main-menu-m">
            <li>
					<a href="about.html">Bài viết</a>
				</li>
				<li>
					<a href="about.html">Giới thiệu</a>
				</li>

				<li>
					<a href="contact.html">Liên hệ</a>
				</li>
			</ul>
		</div>
      <!-- Modal Search -->
      <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
         <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <img src="shop/images/icons/icon-close2.png" alt="CLOSE">
            </button>
            <form class="wrap-search-header flex-w p-l-15">
               <button class="flex-c-m trans-04">
               <i class="zmdi zmdi-search"></i>
               </button>
               <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
         </div>
      </div>
   </header>
   <!-- Cart -->
   <div class="wrap-header-cart js-panel-cart">
      <div class="s-full js-hide-cart"></div>
      <div class="header-cart flex-col-l p-l-65 p-r-25">
         <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="cl2"> 
				<h5><b>GIỎ HÀNG CỦA BẠN</b></h5>
            </span>
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
               <i class="zmdi zmdi-close"></i>
            </div>
         </div>
         @if(Session::has('cart'))
         <div class="header-cart-content flex-w js-pscroll">
            @foreach($myList as $l)
            <ul class="header-cart-wrapitem w-full">
               <li class="header-cart-item flex-w flex-t m-b-12">
                  <a href="" class="header-cart-item-img">
                     <img src="upload/{{$l['item']['img']}}" alt="IMG">
                  </a>
                  <div class="header-cart-item-txt p-t-8">
                     <a href="page/cart/del/{{$l['item']['id']}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                     	<h5>{{$l['item']['tensp']}}</h5>
                     </a>
                     <span class="header-cart-item-info">
                     {{$l['qty']}} x {{$l['item']['giasp']}}
                     </span>
                  </div>
               </li>
            </ul>
            @endforeach
            <div class="w-full">
               <div class="header-cart-total w-full p-tb-40">
                  TỔNG: {{$totalPrice}}
               </div>
               <div class="header-cart-buttons w-full">
                  <a href="" class="flex-c-m cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
					<b>CHI TIẾT ĐƠN HÀNG</b>
				  </a>
               </div>
            </div>
         </div>
         @else
            Chưa có sản phẩm nào trong giỏ hàng!
         @endif
      </div>
   </div>