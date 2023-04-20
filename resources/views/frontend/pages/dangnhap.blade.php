@extends("frontend.layouts.master")
@section("title")
    Đăng nhập
@endsection
@section("content")
<!-- Page Content -->
<div class="container">

<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
              <div class="panel-heading">Đăng nhập</div>
              <div class="panel-body">
                @if ($message = Session::get("thongbao"))
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @endif
                <form action="{{route('dangnhap')}}" method="post">
                    @csrf
                    <div><label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        @if($errors->has('email'))
                        <div class="text-danger">{{$errors->first("email")}}</div>
                         @endif
                    </div>
                    <br>
                    <div><label>Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        @if($errors->has('password'))
                        <div class="text-danger">{{$errors->first("password")}}</div>
                         @endif
                    </div>
                    <br>
                    <p align="center"><button type="submit" class="btn btn-default">Đăng nhập</button></p>
                </form>
              </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<!-- end slide -->
</div>
<!-- end Page Content -->
@endsection