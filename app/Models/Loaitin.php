<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model
{
    use HasFactory;
    protected  $table = 'loaitin';
    protected $primary = 'id';
    public $timestamps = false;

    public function theloai()
    {
        return $this->belongsTo(Theloai::class, "idTheLoai", "id");
    }

    public function tintuc()
    {
        return $this->hasMany(Tintuc::class, "idLoaiTin", "id");
    }
}
