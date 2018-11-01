@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Loại Sản Phẩm</th>
                                        <th style="text-align:center">Delete</th>
                                        <th style="text-align:center">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($loaisp as $lsp)
                                    <tr class="odd gradeX">
                                        <td>{{$lsp->id}}</td>
                                        <td>{{$lsp->tenloaisp}}</td>
                                        <td style="text-align:center">
                                            <a href="#">
                                                <i class="fa fa-trash-o fa-fw"></i> Delete
                                            </a>
                                        </td>
                                        <td style="text-align:center">
                                            <a href="admin/loaisp/sua/{{$lsp->id}}">
                                                <i class="fa fa-pencil fa-fw"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">{{$loaisp->links()}}</div>
                            <!-- /.table-responsive -->
                            
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