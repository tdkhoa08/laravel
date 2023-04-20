@extends("admin.layouts.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Loại tin</th>
                        <th>Số lượt xem</th>
                        <th>Nổi bật</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tintuc as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <td>{{$tt->TieuDe}}</td>
                        <td>{{$tt->TomTat}}</td>
                        <td>{{$tt->loaitin->Ten}}</td>
                        <td>{{$tt->SoLuotXem}}</td>
                        <td>{{$tt->Noi$tt}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa_tintuc',
                            $tt->id)}}">Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('sua_tintuc',
                            $tt->id)}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$tintuc->links()}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
