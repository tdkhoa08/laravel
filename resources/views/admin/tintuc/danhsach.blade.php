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
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{Session('thongbao')}}
                </div>
            @endif
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
                        <td>{{$tt->NoiBat}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                        <a href="#" data-toggle="modal" data-target="#exampleModal{{$tt->id}}"> Xoá</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                        <a href="{{route('sua_tintuc', $tt->id)}}">Sửa</a></td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$tt->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yêu cầu xóa tin tức này</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Có Xoá tin tức này không ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                            <a href="{{route('xoa_tintuc', $tt->id)}}" class="btn btn-primary"> Xoá </a>
                        </div>
                        </div>
                    </div>
                    </div>
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
