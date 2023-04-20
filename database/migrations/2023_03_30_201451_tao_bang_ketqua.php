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
        if(! Schema::hasTable("ketqua")){
            Schema::create('ketqua', function(Blueprint $table){
                $table->increments('Id');
                $table->integer('Masv');
                $table->integer('Mamh');
                $table->integer('Lanthi');
                $table->float('Diemthi',8,2);
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
        Schema::dropifexists('ketqua');
    }
};
