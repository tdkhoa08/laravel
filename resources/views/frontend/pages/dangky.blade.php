@extends("frontend.layouts.master")
@section("title")
    Đăng Ký
@endsection
@section("content")
<!-- Page Content -->
<div class="container">

<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
              <div class="panel-heading">Đăng ký tài khoản</div>
              <div class="panel-body">
                @if ($message = Session::get("thongbao"))
                    <div class="alert alert-success">
                        {{$message}}
                    </div>
                @endif
                <form action="{{route('xulydangky')}}" method="post">
                    @csrf
                    <div>
                        <label>Họ tên</label>
                          <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
                        @if ($errors->has("name"))
                            <div class="text-danger">{{$errors->first("name")}}</div>
                        @endif
                    </div>
                    <br>
                    <div>
                        <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
                        @if ($errors->has("email"))
                            <div class="text-danger">{{$errors->first("email")}}</div>
                        @endif
                    </div>
                    <br>	
                    <div>
                        <label>Nhập mật khẩu</label>
                          <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                        @if ($errors->has("password"))
                            <div class="text-danger">{{$errors->first("password")}}</div>
                        @endif
                    </div>
                    <br>
                    <div>
                        <label>Nhập lại mật khẩu</label>
                          <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                        @if ($errors->has("passwordAgain"))
                            <div class="text-danger">{{$errors->first("passwordAgain")}}</div>
                        @endif
                    </div>
                    <br>
                    <button type="submit" class="btn btn-default">Đăng ký</button>
                </form>
              </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<!-- end slide -->
</div>
<!-- end Page Content -->
@endsection