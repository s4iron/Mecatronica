<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->time('hour_start');
            $table->unsignedTinyInteger('duration');
            
            
            $table->unsignedBigInteger('limit_time')->default(1);
            $table->foreign('limit_time')->references('id')->on('limits');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours');
    }
}
