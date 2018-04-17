@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lợi thế
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/loithe/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Nội Dung :</label>
                                <input class="form-control" name="danhmuc" placeholder="Nhập nội dung lợi thế" />
                        </div>
                        <div class="form-group">
                            <label>Icon :</label>
                                <input class="form-control" name="icon" placeholder="Nhập tên icon" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả :</label>
                            <textarea class="form-control" name="mota" rows="3"></textarea>
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
