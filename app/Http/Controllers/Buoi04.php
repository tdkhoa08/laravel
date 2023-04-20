<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buoi04 extends Controller
{
    public function get_validation01()
    {
        return view("Buoi04.vidu01");
    }
    public function post_validation01(request $req)
    {
        $validatedDate = $req->validate([
            'luongngay' => 'required|numeric',
            'ngaycong'  => 'required|numeric'   
        ],[
            'luongngay.required' => 'Chưa nhập lương ngày',
            'ngaycong.required'  => 'Chưa nhập ngày công',
            'luongngay.numeric'  => 'Lương ngày phải nhập số',
            'ngaycong.numeric'   => 'Ngày công phải nhập số',
        ]);
        $lg = $validatedDate['luongngay'];
        $nc = $validatedDate['ngaycong'];
        $lt = "Lương tháng là:" .$lg * $nc;
        return view("Buoi04.vidu01", compact("lg", "nc", "lt"));
    }

    public function get_upload()
    {
        return view("Buoi04.vidu02");
    }
    public function post_upload(Request $abc)
    {
        $kiemtra= $abc ->validate([
            'myfile' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'myfile.required' => "Chưa chọn ảnh",
            'myfile.image'    => "Không phải file ảnh",
            'myfile.mimes'    => "Chỉ được tải các file jpeg, png, jpg, gif",
            'myfile.max'      => "Kích thước tối đa không được lớn hơn 2048 MB"
        ]);
        $image = $kiemtra['myfile'];
        $noichua = public_path('images');
        $tenhinh = $image->getclientoriginalname();
        $image ->move($noichua, $tenhinh);
        return back() ->with("success", "tải hình thành công");
    }
}
