@extends('page.layout.index')
@section('content')
<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
<div class="container">
<div class="p-b-10">
   <h3 class="ltext-103 cl5">
      Danh sách sản phẩm
   </h3>
</div>
<div class="flex-w flex-sb-m p-b-52">
   <div class="flex-w flex-l-m filter-tope-group m-tb-10">
      <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
      Tất cả
      </button>
      <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
      Vòng gỗ
      </button>
      <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
      Vòng đá
      </button>
   </div>
</div>
<div class="row isotope-grid">
   @foreach($sanpham as $sp)
   <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
      <!-- Block2 -->
      <div class="block2">
         <div class="block2-pic hov-img0">
            <img src="upload/{{$sp->img}}" alt="IMG-PRODUCT">
            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
            Xem nhanh
            </a>
         </div>
         <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
               <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
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
      </div>
   </div>
   @endforeach
   
</div>
<div class="row">{{$sanpham->links()}}</div>
@endsection