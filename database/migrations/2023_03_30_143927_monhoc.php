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
        if(! Schema::hasTable("monhoc")){
            Schema::create('monhoc', function(Blueprint $table){
                $table->increments('mamh');
                $table->string('tenmh',50);
                $table->integer('sotinchi');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropifexists('monhoc');
    }
};
