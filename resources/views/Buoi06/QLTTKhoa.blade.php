@extends("Buoi06.layout")
@section("content")
@if (Session::has("tb"))
  <div class="alert alert-warning">
    {{Session::get("tb")}}
  </div>
@endif
<div>
    <a href="{{route('themkhoa')}}" class="btn btn-success">Thêm Khoa</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã Khoa</th>
      <th scope="col">Tên Khoa</th>
      <th scope="col" colspan="2">Thao Tác</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dskhoa as $kh)
    <tr>
      <th scope="row">{{$kh->makhoa}}</th>
      <td>{{$kh->tenkhoa}}</td>
      <td><a href="" class="btn btn-primary">Sửa</a></td>
      <td><a href="" class="btn btn-danger">Xoá</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection