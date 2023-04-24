<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buoi04;
use App\Http\Controllers\Buoi06;
use App\Models\Lophoc;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\loaitinController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminLogin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "Buoi04"], function(){
    Route::get("/validation",[Buoi04::class,"get_validation01"]);
    Route::post("/validation",[Buoi04::class,"post_validation01"]);
    Route::get("/upload",[Buoi04::class,"get_upload"]);
    Route::post("/upload",[Buoi04::class,"post_upload"])->name("uploadfile");
});

Route::group(["prefix" => "Buoi06"], function(){
    Route::get("/dskhoa",[Buoi06::class, "getDanhSachKhoa"]);
    Route::get("/themkhoa",[Buoi06::class, "getThemKhoa"])->name("themkhoa");
});

Route::group(["prefix" => "Buoi07"], function(){
    Route::get("/test", function(){
        $dslop = Lophoc::where("malop", "=", 2)->with('sinhvien')->get();
        return view("Buoi07.vd01", compact("dslop"));
    });
});

Route::get("/trangchu",[Pagecontroller::class, "getTrangChu"])->name("trangchu");  
Route::get("/lienhe", [Pagecontroller::class, "getLienHe"])->name("lienhe"); 
Route::get("/gioithieu", [Pagecontroller::class, "getGioiThieu"])->name("gioithieu"); 
Route::get("/loaitin/{id}/{TenKhongDau}.html", [Pagecontroller::class,"getLoaiTin"])->name("loaitin");
Route::get("/tintuc/{id}/{TieeuDeKhongDau}.html", [Pagecontroller::class, "getTinTuc"])->name("tintuc");
Route::get("/dangnhap", [Pagecontroller::class, "getDangNhap"])->name("dangnhap");
Route::post("/dangnhap", [Pagecontroller::class, "postDangNhap"])->name("dangnhap");
Route::get("/dangxuat", [Pagecontroller::class, "getDangXuat"])->name("dangxuat");
Route::post("/binhluan/{id}", [Pagecontroller::class, "postBinhLuan"])->name("binhluan");
Route::get("/nguoidung", [Pagecontroller::class, "getNguoiDung"])->name("nguoidung");
Route::post("/nguoidung", [Pagecontroller::class, "postNguoiDung"])->name("nguoidung");
Route::get("/dangky", [Pagecontroller::class, "getDangKy"])->name("dangky");
Route::post("/dangky", [Pagecontroller::class, "postDangKy"])->name("xulydangky");
Route::get("/timkiem", [Pagecontroller::class, "getTimKiem"])->name("timkiem");

Route::group(["prefix" => "admin", "middleware" => "AdminLogin"], function(){
    Route::group(["prefix" => "/theloai"],function(){
        Route::get("/danhsach", [TheLoaiController::class, "getDanhSachTheLoai"])->name("ds_theloai");
        Route::get("them",[TheLoaiController::class, "getThemTheLoai"])->name("them_theloai");
        Route::post("them",[TheLoaiController::class, "postThemTheLoai"])->name("them_theloai");
        Route::get("sua/{id}",[TheLoaiController::class, "getSuaTheLoai"])->name("sua_theloai");
        Route::post("sua/{id}",[TheLoaiController::class, "postSuaTheLoai"])->name("sua_theloai");
        Route::get("xoa/{id}",[TheLoaiController::class, "getXoaTheLoai"])->name("xoa_theloai");
        });

    Route::group(["prefix" => "/loaitin"],function(){
        Route::get("danhsach", [LoaitinController::class, "getDanhSachLoaiTin"])->name("ds_loaitin");
        Route::get("them",[LoaitinController::class, "getThemLoaiTin"])->name("them_loaitin");
        Route::post("them",[LoaitinController::class, "postThemLoaiTin"])->name("them_loaitin");
        Route::get("sua/{id}",[LoaitinController::class, "getSuaLoaiTin"])->name("sua_loaitin");
        Route::post("sua/{id}",[LoaitinController::class, "postSuaLoaiTin"])->name("sua_loaitin");
        Route::get("xoa/{id}",[LoaitinController::class, "getXoaLoaiTin"])->name("xoa_loaitin");
        });

    Route::group(["prefix" => "/tintuc"],function(){
        Route::get("/danhsach", [TintucController::class, "getDanhSachTinTuc"])->name("ds_tintuc");
        Route::get("them",[TintucController::class, "getThemTinTuc"])->name("them_tintuc");
        Route::post("them",[TintucController::class, "postThemTinTuc"])->name("them_tintuc");
        Route::get("sua/{id}",[TintucController::class, "getSuaTinTuc"])->name("sua_tintuc");
        Route::post("sua/{id}",[TintucController::class, "postSuaTinTuc"])->name("sua_tintuc");
        Route::get("xoa/{id}",[TintucController::class, "getXoaTinTuc"])->name("xoa_tintuc");
        });
        
    Route::group(['prefix' => "/ajax"], function(){
        Route::get('loaitin/{idtl}', [TintucController::class, "getloaitin"]);
        });
});

Route::get("login",[AdminController::class, "getLogin"])->name("login");
Route::post("login",[AdminController::class, "postLogin"])->name("login");
Route::get("logout",[AdminController::class, "getLogout"])->name("logout");
Route::get("profileuser", [AdminController::class, "getProfileUser"])->name("profile");
    

