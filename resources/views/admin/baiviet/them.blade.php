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
                     <form action="admin/baiviet/them" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                           <label>Tiêu đề bài viết</label>
                           <input class="form-control" placeholder="Nhập tiêu đề bài viết ở đây" name="tieude">
                           <label>Nội dung bài viết</label>
                           <textarea id="editor1" name="noidung" cols="80" rows="10">
                           </textarea>     
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
   <script>
      CKEDITOR.replace( 'editor1' );
   </script> 
</div>
@endsection