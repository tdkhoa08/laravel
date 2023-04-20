@extends("frontend.layouts.master")
@section("title")
    Liên Hệ
@endsection
@section("content")
  <!-- Page Content -->
  <div class="container">
    	<!-- slider -->
    	@include("frontend.layouts.slide")
        <!-- end slide -->
        <div class="space20"></div>
        <div class="row main-left">
            <div class="col-md-3">
                @include("frontend.layouts.menu")
            </div>
		    <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
                    </div>

                    <div class="panel-body">
                        <!-- item -->
                        <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>

                        <div class="break"></div>
                        <br>
                        <b><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </b>
                         142 Tô Hiến Thành, Phường 14, Quận 10, Thành phố Hồ Chí Minh<br>

                        <b><span class="glyphicon glyphicon-envelope"></span> Email : </b>
                        dientoan@hcmut.edu.vn <br>

                        <b><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </b>
                        028 2214 8404<br>
                        <br>
                        <div class="break"></div>
                        <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                        <div class="break"></div><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5201952559787!2d106.68891131458902!3d10.771412992324944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c586421ef%3A0xb606461dc7627921!2zVHJ1bmcgVMOibSDEkMOgbyBU4bqhbyBUaW4gSOG7jWMgS2hvYSBQaOG6oW0!5e0!3m2!1svi!2s!4v1465285414810" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
	    </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection