@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Thêm mới sản phẩm</h1>
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
                            <label>Tên sản phẩm</label>
                            <input class="form-control" placeholder="Nhập tên loại sản phẩm ở đây" name="ten">
                            <label>Loại sản phẩm</label>
                            <select class="form-control" name="loai">
                                @foreach($loaisp as $lsp)
                                    <option value="{{$lsp->id}}">{{$lsp->tenloaisp}}</option>
                                @endforeach
                            </select>
                            <label>Giá sản phẩm</label>
                            <input class="form-control" placeholder="Nhập giá sản phẩm ở đây" name="gia">
                            <label>Khuyến mãi</label>
                            <input class="form-control" placeholder="Nhập số tiền sẽ khuyễn mãi, mặc định là 0" name="km">
                            <label>Mô tả về sản phẩm</label>
                            <input class="form-control" placeholder="Nhập mô tả sản phẩm ở đây" name="mota">
                            <label>Hình ảnh của sản phẩm</label>
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