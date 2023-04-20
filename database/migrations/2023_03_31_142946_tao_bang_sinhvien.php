<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        if(! Schema::hasTable("sinhvien")){
            Schema::create('sinhvien', function(Blueprint $table){
                $table->increments('Masv');
                $table->string('Hosv',50);
                $table->string('Tensv',10);
                $table->string('Phai',3);
                $table->datetime('Ngaysinh');
                $table->string('Noisinh',50);
                $table->string('Diachi',50);
                $table->integer('Malop');
                $table->integer('Hocbong');
                $table->string('Hinh',50);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropifexists('sinhvien');
    }
};

