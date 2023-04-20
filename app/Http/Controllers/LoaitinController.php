<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;
use App\Models\Loaitin;
use App\Models\Tintuc;
use App\Models\Comment;
use App\Models\User;

class LoaitinController extends Controller
{   
    public function getDanhSachLoaiTin()
    {
        $loaitin = LoaiTin::paginate(10);
        return view("admin.loaitin.danhsach", compact("loaitin"));
    }

    public function getThemLoaiTin()
    {
        $theloai = TheLoai::all();
        return view("admin.loaitin.them", compact("theloai"));
    }

    public function postThemLoaiTin(Request $req)
    {
        $val = $req->validate([
        "ten" => 'required|min:3|max:100|unique:TheLoai,Ten',
        "theloai" => "required"
        ],[
        "ten.required" => "Bạn chưa nhập tên thể loại",
        "ten.min" => "Tên thể loại tối thiểu 3 ký tự",
        "ten.max" => "Tên thể loại tối đa 100 ký tự",
        "ten.unique" => "Tên thể đã có trong CSDL",
        "theloai.required" => "Bạn chưa chọn thể loại"
        ]);
        $loaitin = new Loaitin();
        $loaitin->Ten = $val["ten"];
        $loaitin->TenKhongDau = changeTitle($val['ten']);
        $loaitin->idTheLoai = $val["theloai"];
        $loaitin->save();
        return redirect("admin/loaitin/them")->with("thongbao", "Thêm mới thàng công");
    }

    public function getSuaLoaiTin($id)
    {
        $loaitin = Loaitin::find($id);
        $theloai = Theloai::all();
        return view("admin.loaitin.sua", compact("loaitin","theloai"));
    }
    public function postSuaLoaiTin(Request $req, $id)
    {
        $val = $req->validate([
            "ten" => 'required|min:3|max:100|unique:TheLoai,Ten',
            "theloai" => "required"
        ],[
            "ten.required" => "Bạn chưa nhập tên thể loại",
            "ten.min" => "Tên thể loại tối thiểu 3 ký tự",
            "ten.max" => "Tên thể loại tối đa 100 ký tự",
            "ten.unique" => "Tên thể đã có trong CSDL",
            "theloai.required" => "Bạn chưa chọn thể loại"
        ]);
        $loaitin = loaitin::find($id);
        $loaitin->Ten = $val['ten'];
        $loaitin->TenKhongDau = changeTitle($val['ten']);
        $loaitin->idTheLoai = $val["theloai"];
        $loaitin->save();
        return redirect("admin/loaitin/sua/".$id)->with("thongbao","Sửa thành công");
    }

    public function getXoaLoaiTin($id)
    {
        $tl = loaitin::find($id);
        $tl->delete();
        return redirect("admin/loaitin/danhsach")->with("thongbao", "Xóa thể loại thành công");
    }
    
}
