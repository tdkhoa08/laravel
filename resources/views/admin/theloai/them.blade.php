@extends("admin.layouts.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể Loại
                    <small>Thêm mới</small>
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
                        <div class="alert alert-danger">
                           {{session('thongbao')}}
                        </div>
                    @endif
                @endif
                <form action="{{route('them_theloai')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên Thể Loại</label>
                        <input class="form-control" name="ten" placeholder="Vui lòng nhập tên thể loại"/>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection