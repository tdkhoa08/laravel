<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    use HasFactory;
    protected  $table = 'theloai';
    protected $primary = 'id';
    public $timestamps = false;

    public function loaitin()   
    {
        return $this->hasMany(Loaitin::class, "idTheLoai", "id");
    }
    public function tintuc()
    {
        return $this->hasManyThrough(Tintuc::class, Loaitin::class, "idTheLoai", "idLoaiTin", "id");
    }
}

