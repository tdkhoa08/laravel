<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminLogin;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view("admin.login");
    }

    public function postLogin(Request $req)
    {
        $val = $req->validate([
            "email" => "required",
            "password" => "required|min:3|max:8"
        ],[
            "email.required" => "Bạn chưa nhập Email",
            "password.required" => "Bạn chưa nhập Mật khẩu",
            "password.min" => "Mật khẩu ít nhất 3 ký tự",
            "password.max" => "Mật khẩu tối đa 8 ký tự"
        ]);
        if(Auth::attempt(["email" => $val['email'], "password" => $val['password']]))
        {
            return redirect("admin/theloai/danhsach");
        }
        else
        {
            return redirect("login")->with('thongbao', 'Đăng nhập không thành công');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect("login");
    }

    public function getProfileUser()
    {
        $user = Auth::user();
        return view("admin/user/sua", compact("user"));
    }
}
