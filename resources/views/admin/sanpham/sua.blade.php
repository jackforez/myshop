@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Sửa thông tin sản phẩm</h1>
      </div>
      <!-- /.col-lg-12 -->
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="row">
                  <div class="col-lg-12">
                    @if(count($errors)>0)
                     <div class="alert alert-danger">    
                        @foreach($errors->all() as $e)
                        {{$e}}</br>
                        @endforeach
                     </div>
                     @endif
                     @if(session('thongbao'))
                     <div class="alert alert-success">
                        {{session('thongbao')}}
                     </div>
                     @endif
                     <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                            <label>Tên cũ</label>
                            <input class="form-control" name="ten" value="{{$sanpham->tensp}}">
                            <label>Loại sản phẩm</label>
                            <select class="form-control" name="loai">
                                @foreach($loaisp as $lsp)
                                    @if($lsp->id != $sanpham->maloaisp)
                                        <option value="{{$lsp->id}}">{{$lsp->tenloaisp}}</option>
                                    @else
                                        <option selected value="{{$lsp->id}}">{{$lsp->tenloaisp}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label>Giá sản phẩm</label>
                            <input class="form-control" name="gia" value="{{$sanpham->giasp}}">
                            <label>Khuyến mãi</label>
                            <input class="form-control" name="km" value="{{$sanpham->giakm}}">
                            <label>Mô tả về sản phẩm</label>
                            <input class="form-control" name="mota" value="{{$sanpham->mota}}">
                            <label style="margin-top:10px;">Thay đổi hình ảnh của sản phẩm bằng cách chọn các nút bên dưới</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="hinh" value="{{$sanpham->img}}">
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="hinh1" value="{{$sanpham->img1}}">
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="hinh2" value="{{$sanpham->img2}}">
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                     </form>
                  </div>
                  <!-- /.col-lg-6 (nested) -->
               </div>
               <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
         </div>
         <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
   </div>
   <!-- /.row -->
</div>
@endsection