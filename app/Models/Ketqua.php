<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketqua extends Model
{
    use HasFactory;
    protected $table = 'ketqua';
    protected $primary = 'id';
    public $timestamps = false;

    public function sinhvien()
    {
        return $this->belongsto(Sinhvien::class, "masv", "masv");
    }
     public function monhoc()
     {
        return $this->belongsto(Monhoc::class, "mamh", "mamh");
     }
}