@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Thêm mới loại sản phẩm</h1>
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
                     <form action="admin/loaisp/them" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                           <input class="form-control" placeholder="Nhập tên loại sản phẩm ở đây" name="ten">
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