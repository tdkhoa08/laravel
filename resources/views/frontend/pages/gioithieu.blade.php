@extends("frontend.layouts.master")
@section("title")
    Giới Thiệu
@endsection

@section("content")
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
                    <h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
                </div>

                <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-lg-5 bg-green d-flex flex-column pt-3 mb-4 px-2">
                            <img src="images/avatar.jpg" alt="user" width="100%" class="rounded-circle mx-auto mb-2">
                            <p class="fs-5 text-capitalize text-white fw-bold" style="padding-top:10px"><b>Thông tin cá nhân</b></p>
                            <p class="text-start text-white"><b>Địa chỉ:</b> 12/14/14 Hoàng Hoa Thám, Phường 7, Quận Bình Thạnh, Tp Hồ Chí Minh</p>
                            <p class="text-start text-white"><b>Điện thoại:</b> 0905 235 233</p>
                            <p class="text-start text-white"><b>Email:</b> dinhkhoa3008@gmail.com</p>
                            <p class="text-start text-white"><b>Ngày sinh:</b> 30/08/1998</p>
                        </div>
                        <div class="col-md-9 col-lg-7" >
                            <h3><p class="text-primary">TRẦN ĐÌNH KHOA</p></h3>
                            <p class="text-secondary">Sinh viên lớp thiết kế web</p>
                            <hr class="text-primary w-100" style="border:2px solid">
                            <p class="text-blue fs-5">Tóm tắt bản thân</p>
                
                            <p class="text-secondary" style="padding-left:25px">Là một người năng động, hòa đồng, sống có kỷ luật và trách nhiệm, "Biến
                            áp lực thành động lực" là châm ngôn sống của em. Với đam mê thích tìm kiếm, khám phá, 
                            yêu công nghệ và đặc biệt thích các sản phảm mang tính logic nên làm việc trong môi trường
                            mạng Internet, và lập trình ứng dụng là một trãi nghiệm mà em hằng ao ước.</p>
                            <hr>
                            <p class="text-blue fs-5">Mục tiêu nghề nghiệp</p>
                            <ul style="list-style-type:none">
                                <li class="text-secondary">- Mục tiêu ngắn hạn trong 3 tháng: <b>Hoàn thành tốt khóa học Lập trình Web ở TT Điện toán Đại học Bách Khoa TPHCM</b></li>
                                <li class="text-secondary">- Mục tiêu ngắn hạn trong 1 năm: <b>Tìm 1 công việc về ngành Lập trình, có
                                    thể là lập trình Website hoặc lập trình Ứng dụng Application</b></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection