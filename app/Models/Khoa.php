<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;
    protected $table = 'khoa';
    protected $primary = 'makhoa';
    public $timestamps = false;

    public function lophoc()
    {
        return $this->hasmany(Lophoc::class, "makhoa", "makhoa");
    }
}
