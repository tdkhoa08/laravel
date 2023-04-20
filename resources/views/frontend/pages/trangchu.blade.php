@extends("frontend.layouts.master")
@section("title")
	Tin Tức Laravel
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
					<h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
				</div>

				<div class="panel-body">
					<!-- item -->
					@foreach($theloai as $tl)
						@if(count($tl->loaitin)>0)	
							<div class="row-item row">
								<h3>
									<a href="{{route('trangchu')}}">{{$tl->Ten}}</a> |
									@foreach ($tl->loaitin as $lt)
										<small><a href="{{route('loaitin', [$lt->id, $lt->TenKhongDau])}}">
										<i>{{$lt->Ten}}</i></a>/</small>
									@endforeach
								</h3>
								@php ($data = $tl->tintuc->where("NoiBat", "=", 1)->sortByDesc('id')->take(5))
								@php ($tin1 = $data->shift())
								<div class="col-md-8 border-right">
									<div class="col-md-5">
										<a href="{{route('tintuc', [$tin1->id, $tin1->TieuDeKhongDau])}}">
										@if(isset($tin1["Hinh"]))
											<img class="img-responsive" src="images/{{$tin1['Hinh']}}" alt="{{$tin1['Hinh']}}">
									 	@else
											<img class="img-responsive" src="images/em sn.jpg" alt="320x150">
										</a>
										@endif
									</div>

									<div class="col-md-7">
										<h3>{{isset($tin1["TieuDe"])? $tin1["TieuDe"]: "aaa"}}</h3>
										<p>{{isset($tin1["TomTat"])? $tin1["TomTat"]: "bbb"}}</p>
										<a class="btn btn-primary" href="{{route('tintuc', [$tin1->id, $tin1->TieuDeKhongDau])}}">Xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>

								</div>

								<div class="col-md-4">
									@foreach ($data as $tt)
									<a href="{{route('tintuc', [$tt->id, $tt->TieuDeKhongDau])}}">
										<h4>
											<span class="glyphicon glyphicon-list-alt"></span>
											{{isset($tt["TieuDe"])? $tt["TieuDe"]: "ccc"}}
										</h4>
									</a>
									@endforeach
								</div>
								<div class="break"></div>
							</div>
							<!-- end item -->
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>

@endsection