@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách các ảnh sẽ làm SLIDE</h1>
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
                                        <th style="width:5%">ID</th>
                                        <th style="width:25%">Hình ảnh</th>
                                        <th>Slogan</th>
                                        <th style="text-align:center;width:10%">Delete</th>
                                        <th style="text-align:center;width:10%">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slide as $sl)
                                    <tr class="odd gradeX">
                                        <td>{{$sl->id}}</td>
                                        <td>
                                            <div class="modal fade" id="{{$sl->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="upload/slides/{{$sl->link}}" width="100%">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" style="border-radius: 50%" data-dismiss="modal">X</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#{{$sl->id}}">{{$sl->link}}</a>
                                        </td>
                                        <td>{{$sl->slogan}}</td>
                                        <td style="text-align:center">
                                            <a href="#">
                                                <i class="fa fa-trash-o fa-fw"></i> Delete
                                            </a>
                                        </td>
                                        <td style="text-align:center">
                                            <a href="#">
                                                <i class="fa fa-pencil fa-fw"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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