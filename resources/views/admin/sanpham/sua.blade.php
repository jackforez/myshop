@extends('admin.layout.index')
@section('content')
<<div id="page-wrapper">
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
                     <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                            <label>Tên cũ: {{$sanpham->tensp}}</label>
                            <input class="form-control" placeholder="Nhập tên mới ở đây" name="ten">
                            <label>Loại cũ</label>
                            <select class="form-control" name="loai">
                                @foreach($loaisp as $lsp)
                                    @if($lsp->id != $sanpham->maloaisp)
                                        <option value="{{$lsp->id}}">{{$lsp->tenloaisp}}</option>
                                    @else
                                        <option selected value="{{$lsp->id}}">{{$lsp->tenloaisp}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label>Giá sản phẩm: {{$sanpham->giasp}}</label>
                            <input class="form-control" placeholder="Nhập giá mới của sản phẩm ở đây, nếu không nhập sẽ lấy giá cũ" name="gia">
                            <label>Khuyến mãi: {{$sanpham->giakm}}</label>
                            <input class="form-control" placeholder="Nhập số tiền sẽ khuyễn mãi, mặc định là 0, nếu không nhập sẽ lấy giá cũ" name="km">
                            <label>Mô tả về sản phẩm</label>
                            <input class="form-control" placeholder="Nhập mô tả sản phẩm ở đây,nếu không nhập sẽ lấy mô tả cũ" name="mota">
                            <label>Hình ảnh của sản phẩm: {{$sanpham->img}}</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="hinh">
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