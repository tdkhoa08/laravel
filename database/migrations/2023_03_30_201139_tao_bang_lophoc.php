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
        if(! Schema::hasTable("lophoc")){
            Schema::create('lophoc', function(Blueprint $table){
                $table->increments('Malop');
                $table->string('Tenlop',30);
                $table->integer('Makhoa');
                $table->string('Gvcn',40);
                $table->integer('Siso');
                $table->integer('Hocphi');
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
        Schema::dropifexists('lophoc');
    }
};
