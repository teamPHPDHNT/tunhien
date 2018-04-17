@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thông kê
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/thongke/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <label>Loại :</label>
                                        <input class="form-control" name="loai" placeholder="Nhập tên loại thống kê" />
                                </div>
                                <div class="form-group">
                                    <label>Số kê :</label>
                                        <input class="form-control" type ="number" name="soluong" placeholder="Nhập số lượng" />
                                </div>
                                <button type="submit" class="btn btn-default">Thêm</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
    </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection
