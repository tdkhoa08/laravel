<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Buoi06 extends Controller
{
    public function getDanhSachKhoa()
    {
        $dskhoa = DB::table("khoa")->get();
        return view("Buoi06.QLTTKhoa", compact("dskhoa"));
    }

    public function getThemKhoa()
    {
        return view("Buoi06.themkhoa");
    }
}