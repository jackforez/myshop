@extends('page.layout.index')
@section('title','Trang thanh toán')
@section('content')
<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				@if($tongsl>0)
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Sản phẩm</th>
									<th class="column-2"></th>
									<th class="column-3">Đơn giá</th>
									<th class="column-4 text-center">Số lượng</th>
									<th class="column-5">Thành tiền</th>
                                </tr>
                                @foreach($mycart as $mc)
								<tr class="table_row">
									<td class="column-1">
										
                                            <a href="page/cart/del/{{$mc['item']['id']}}">
											<div class="how-itemcart1"><img src="upload/{{$mc['item']['img']}}" alt="IMG"></div>
                                            </a>
										
									</td>
                                    <td class="column-2">{{$mc['item']['tensp']}}</td>
									<td class="column-3">
                                        @if($mc['item']['giakm'] > 0 )
                                            {{number_format($mc['item']['giakm'])}}
                                        @else
                                            {{$mc['item']['giasp']}}
                                        @endif
                                    </td>
									<td class="column-4 text-center">
										{{$mc['qty']}}
									</td>
									<td class="column-5">
										@if($mc['item']['giakm'] > 0 )
                                            {{number_format($mc['item']['giakm'] * $mc['qty'])}}
                                        @else
											{{number_format($mc['item']['giasp'] * $mc['qty'])}}
                                        @endif
									</td>
                                </tr>
								@endforeach
								<tr class="table_head">
									<th class="column-1">Tổng</th>
									<th class="column-2"></th>
									<th class="column-3"></th>
									<th class="column-4 text-center">{{number_format($tongsl)}}</th>
									<th class="column-5">{{number_format($tongtien)}}</th>
                                </tr>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<a href="page/trangchu" class="flex-c-m stext-101 cl2 size-118 bg8 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Quay lại mua tiếp
								</a>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Làm mới giỏ hàng
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Thông tin thanh toán
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Tổng cộng:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									{{number_format($tongtien)}} Đ
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="form-group">
                                <h4 class="mtext-109 cl2 p-b-30">
                                    Thông tin giao hàng
                                </h4>
                                <input type="text" class="form-control m-b-10" name="hoten" placeholder="Họ tên của bạn">
                                <input type="text" class="form-control m-b-10" name="sdt" placeholder="Số điện thoại của bạn">
                                <input type="text" class="form-control m-b-20" name="diachi" placeholder="Địa chỉ nhận hàng">
                                <label for="note">Ghi chú:</label>
                                <textarea name="ghichu" id="note" cols="30" rows="3" class="form-control"></textarea>
                            </div>
						</div>
						<div class="flex-w flex-t p-t-27">
                            <button class="flex-c-m stext-101 size-116 btn btn-outline-success">
                                OK! Tôi muốn thanh toán
                            </button>
						</div>

						
					</div>
				</div>
				@else
					<div class="flex-w flex-m m-r-20 m-tb-5">
						<a href="page/trangchu" class="flex-c-m stext-101 cl2 size-118 bg8 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
							Quay lại trang chủ
						</a>
					</div>
				@endif
			</div>
		</div>
	</form>
@stop