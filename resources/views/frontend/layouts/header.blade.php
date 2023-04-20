<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('trangchu')}}">Laravel Tin Tức</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('gioithieu')}}">Giới thiệu</a>
                </li>
                <li>
                    <a href="{{route('lienhe')}}">Liên hệ</a>
                </li>
            </ul>
            
            <form class="navbar-form navbar-right" action="{{route('timkiem')}}" method="get">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nhập từ khóa" name="tukhoa">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
            </form>

            <ul class="nav navbar-nav pull-right">
            @if (Auth::check())
                <li>
                    <a href="{{route('nguoidung')}}">
                        <span class="glyphicon glyphicon-user"></span>
                        {{Auth::user()->name}}
                    </a>
                </li>
                <li>
                    <a href="{{route('dangxuat')}}">Đăng xuất</a>
                </li>
                @else
                <li>
                    <a href="{{route('dangky')}}">Đăng ký</a>
                </li>
                <li>
                    <a href="{{route('dangnhap')}}">Đăng nhập</a>
                </li>
            @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
