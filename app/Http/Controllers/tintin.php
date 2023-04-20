<?php

namespace App\Http\Controllers;
use App\Models\Theloai;
use App\Models\Tintuc;
use Illuminate\Http\Request;

class tintin extends Controller
{
    public function getDanhSachTinTuc()
    {   
        $tintuc = Tintuc::orderBy("id", "DESC")->paginate(10);
        return view("admin.tintuc.danhsach", compact("tintuc"));
    }
}
