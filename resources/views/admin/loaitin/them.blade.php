@extends("admin.layouts.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại Tin
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                            <br>
                        @endforeach
                    </div>
                @else
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                           {{session('thongbao')}}
                        </div>
                    @endif
                @endif
                <form action="{{route('them_loaitin')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select class="form-control" name="theloai">
                        @foreach($theloai as $tl)
                            <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Loại Tin</label>
                        <input class="form-controll" name="ten" value="">
                    </div>

                    <button type="submit" class="btn btn-default">Lưu Trữ</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection