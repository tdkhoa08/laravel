<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    use HasFactory;
    protected $table = 'monhoc';
    protected $primary = 'mamh';
    public $timestamps = false;

    public function ketqua()
    {
        return $this->hasmany(Ketqua::class, "mamh", "mamh");
    }
}