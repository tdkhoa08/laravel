<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_sinhvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $kh = [
            ["Hosv" => "Nguyễn Thị", "Tensv" => "Hải", "Phai" => "Nữ","Ngaysinh" => "79/03/21",
            "Noisinh" => "Sài Gòn","Diachi" => "12 Võ Văn Tần Q3","Malop" => "1","Hocbong" => "100000","Hinh" => ""],
            ["Hosv" => "Trần Văn", "Tensv" => "Chính", "Phai" => "Nam","Ngaysinh" => "80/12/24",
            "Noisinh" => "Sài Gòn","Diachi" => "3 Nguyễn Bỉnh Khiêm Q1","Malop" => "2","Hocbong" => "120000","Hinh" => ""],
            ["Hosv" => "Lê Thị Bạch", "Tensv" => "Yến", "Phai" => "Nữ","Ngaysinh" => "77/02/21",
            "Noisinh" => "Hà Nội","Diachi" => "75 Pastuer Q3","Malop" => "1","Hocbong" => "140000","Hinh" => ""],
            ["Hosv" => "Trần Thanh", "Tensv" => "Mai", "Phai" => "Nam","Ngaysinh" => "78/12/20",
            "Noisinh" => "Bến Tre","Diachi" => "56 Hai Bà Trưng","Malop" => "2","Hocbong" => "","Hinh" => ""],
            ["Hosv" => "Trần Thị Thu", "Tensv" => "Thủy", "Phai" => "Nữ","Ngaysinh" => "81/02/13",
            "Noisinh" => "Sài Gòn","Diachi" => "40/3 An Lạc Vũng Tàu","Malop" => "2","Hocbong" => "","Hinh" => ""],
            ["Hosv" => "Trần Thị", "Tensv" => "Thanh", "Phai" => "Nữ","Ngaysinh" => "79/12/31",
            "Noisinh" => "Sài Gòn","Diachi" => "10 Nguyễn Du Q1","Malop" => "3","Hocbong" => "","Hinh" => ""],
            ["Hosv" => "Trần Anh", "Tensv" => "Tuấn", "Phai" => "Nam","Ngaysinh" => "78/08/12",
            "Noisinh" => "Long An","Diachi" => "12 Điện Biên Phủ - Long An","Malop" => "3","Hocbong" => "80000","Hinh" => ""],
            ["Hosv" => "Trần Thanh", "Tensv" => "Triều", "Phai" => "Nam","Ngaysinh" => "80/01/02",
            "Noisinh" => "Hà Nội","Diachi" => "3 Nguyễn Thiện Thuật Q3","Malop" => "4","Hocbong" => "80000","Hinh" => ""],
            ["Hosv" => "Nguyễn Văn", "Tensv" => "Chính", "Phai" => "Nam","Ngaysinh" => "77/01/01",
            "Noisinh" => "Sài Gòn","Diachi" => "5 Nguyễn Văn Cừ Q5","Malop" => "4","Hocbong" => "12000","Hinh" => ""],
            ["Hosv" => "Lê Thị", "Tensv" => "Kim", "Phai" => "Nam","Ngaysinh" => "81/12/20",
            "Noisinh" => "Sài Gòn","Diachi" => "12 Nguyễn Thiệp Q4","Malop" => "4","Hocbong" => "12000","Hinh" => ""],
        ];
        foreach($kh as $k)
        {
            DB::table("sinhvien")->insert($k);
        }
    }
}
