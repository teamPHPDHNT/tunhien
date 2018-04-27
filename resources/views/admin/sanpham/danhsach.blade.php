@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Danh Sách</small>
                        </h1>
            </div>
            <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Hình Ảnh</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sanpham as $sp)
                        <tr class="odd gradeX" align="center">
                            <td>{{$sp['id']}}</td>
                            <td>{{$sp['name']}}</td>
                            <td>{{$sp['images']}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.sanpham.delete', $sp['id'])}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.sanpham.edit', $sp['id'])}}">Edit</a></td>
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