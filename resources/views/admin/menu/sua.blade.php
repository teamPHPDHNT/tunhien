@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Menu
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
            
                    <form action="{{route('admin.menu.update', $data['id'])}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                                    <label>Tên Menu</label>
                                    <input class="form-control" name="name" value="{{$data['name']}}" placeholder="Nhập tên menu" />
                        </div>
                        <div class="form-group">
                                    <label>Đường link</label>
                                    <input class="form-control" name="link" value="{{$data['link']}}" placeholder="Nhập đường link" />
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
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