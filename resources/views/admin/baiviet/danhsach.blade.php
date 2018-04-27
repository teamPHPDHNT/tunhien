@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                        <h1 class="page-header">Bài Viết
                            <small>Danh Sách</small>
                        </h1>
            </div>
            <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Danh mục</th>
                            <th>Icon</th>
                            <th>Mô tả</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($baiviet as $bv)
                        <tr class="odd gradeX" align="center">
                            <td>{{$bv['id']}}</td>
                            <td>{{$bv['danhmuc']}}</td>
                            <td>{{$bv['icon']}}</td>
                            <td>{{$bv['mota']}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.baiviet.delete', $bv['id'])}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.baiviet.edit', $bv['id'])}}">Edit</a></td>
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