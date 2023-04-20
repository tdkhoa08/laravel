@extends("admin.layouts.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại tin
                    <small>{{$loaitin->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                            <br>
                        @endforeach
                    </div>
                @endif
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif

                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('sua_loaitin', $loaitin->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="theloai">
                         @foreach($theloai as $tl)
                         <option value="{{$tl->id}}" @if($loaitin->idTheloai==$tl->id)
                            {{"selected"}} @endif>{{$tl->Ten}}</option>   
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Loại Tin</label>
                        <input class="form-control" name="ten" value="{{$loaitin->Ten}}" />
                    </div>
                    <button type="submit" class="btn btn-default">Cập nhật</button>
                    <button type="reset" class="btn btn-default">Làm  mới</button>
                    <form>
                </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection