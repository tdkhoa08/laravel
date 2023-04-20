@extends("frontend.layouts.master")
@section("title")
    Tin Tức Laravel
@endsection

@section("content")
<!-- Page Content -->
<div class="container">
<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Thông tin tài khoản</div>
            <div class="panel-body">
                @if ($message = Session::get("thongbao"))
                    <div class="alert  alert-success">
                        {{$message}}
                    </div>
                @endif
            <form action="{{route('nguoidung')}}" method="post">
                @csrf
                <div>
                    <label>Họ tên</label>
                    <input type="text" class="form-control  " placeholder="Tên đăng nhập" name="name" value="{{$user->name}}">
                    @if ($errors->has('name'))
                        <div class="text-danger">{{$errors-first('name')}}</div>
                    @endif
                </div>
                <br>
                <div>
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}" disabled>
                </div>
                <br>
                <div>
                    <input type="checkbox" id="changepassword" name="changepassword">
                    <label>Đổi mật khẩu</label>
                    <input type="password" class="form-control password" name="password" disabled>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{$erorrs->first('password')}}</div>
                    @endif
                </div>
                <br>
                <div>
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" class="form-control password" name="passwordAgain" disabled>
                    @if($errors->has("passwordAgain"))
                        <div class="text-danger">{{$errors->first('passwordAgain')}}</div>
                    @endif
                </div>
                <br>
                <button type="submit" class="btn btn-default">Cập nhật</button>
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

@section("script")
    <script>
        $(document).ready(function(){
            $("#changepassword").change(function(){
                if ($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled')
                }
                else
                {
                    $(".password").attr("disabled", "")
                }
            })
        })
    </script>
@endsection