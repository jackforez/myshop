@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="width:1%;">ID</th>
                                        <th style="text-align:center;width:10%;">Tiêu đề</th>
                                        <th style="text-align:center;width:2%;">Delete</th>
                                        <th style="text-align:center;width:2%;">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($baiviet as $bv)
                                    <tr class="odd gradeX">
                                        <td>{{$bv->id}}</td>
                                        <td>{{$bv->tieude}}</td>
                                        <td style="text-align:center">
                                            <a href="admin/baiviet/xoa/{{$bv->id}}">
                                                <i class="fa fa-trash-o fa-fw"></i> Delete
                                            </a>
                                        </td>
                                        <td style="text-align:center">
                                            <a href="admin/baiviet/sua/{{$bv->id}}">
                                                <i class="fa fa-pencil fa-fw"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-rebvonsive -->
                            <div class="row">{{$baiviet->links()}}</div>
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