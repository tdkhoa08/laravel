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
        if(! Schema::hasTable("khoa")){
            Schema::create('khoa', function(Blueprint $table){
                $table->increments('Makhoa');
                $table->string('Tenkhoa',50);
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
        Schema::dropifexists('khoa');
    }
};
