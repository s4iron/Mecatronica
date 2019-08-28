<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliberiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliberies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('serial_id');
            $table->foreign('serial_id')->references('id')->on('serials');

            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations');
        
            $table->unsignedBigInteger('report_id');
            $table->foreign('report_id')->references('id')->on('reports');
            
            $table->unsignedBigInteger('delibery_state_id');
            $table->foreign('delibery_state_id')->references('id')->on('delibery_states');
            
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
        Schema::dropIfExists('deliberies');
    }
}
