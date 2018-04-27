@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                        <h1 class="page-header">Thống Kê
                            <small>Danh Sách</small>
                        </h1>
            </div>
            <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Loại</th>
                            <th>Số lượng</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($thongke as $tk)
                        <tr class="odd gradeX" align="center">
                            <td>{{$tk['id']}}</td>
                            <td>{{$tk['loai']}}</td>
                            <td>{{$tk['soluong']}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.thongke.delete', $tk['id'])}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.thongke.edit', $tk['id'])}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection