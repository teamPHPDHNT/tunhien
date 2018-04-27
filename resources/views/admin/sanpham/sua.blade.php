@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('admin.sanpham.update', $data['id'])}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                            <label>Tên :</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{$data['name']}}" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh :</label>
                                <input type="file" class="form-control" name="images" value="" placeholder="Hình ảnh" value="{{$data['images']}}"/>
                        </div>
                            <button type="submit" class="btn btn-default">Thêm </button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection