<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    use HasFactory;
    protected  $table = 'tintuc';
    protected $primary = 'id';
    public $timestamps = false;

    public function loaitin()
    {
        return $this->belongsTo(Loaitin::class, "idLoaiTin", "id");
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, "idTinTuc", "id");
    }
}
