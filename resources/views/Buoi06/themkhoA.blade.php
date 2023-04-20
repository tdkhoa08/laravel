@extends("Buoi06.layout")
@section("content")
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên Khoa</label>
        <input type="text" name="tenkhoa" class="form-control" placeholder="nhập tên khoa">
        @if($errors->has("tenkhoa"))
            <div class="text-danger">{{$errors->first("tenkhoa")}}</div>
        @endif
    </div>
    <div>
        <input type="submit" name="luutru" value=" Lưu Trữ ">
    </div>
</form>
@endsection