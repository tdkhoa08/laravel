<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_khoa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $kh = [
            ["Tenkhoa" => "Công nghệ Thông tin"],
            ["Tenkhoa" => "Đại cương"],
            ["Tenkhoa" => "Quan hệ hợp tác quốc tế"],
            ["Tenkhoa" => "Cơ khí"]
        ];
        foreach($kh as $k)
        {
            DB::table("khoa")->insert($k);
        }
    }
}  