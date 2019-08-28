<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_reservation', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedTinyInteger('quantity');
            
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations');

            
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');

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
        Schema::dropIfExists('item_reservation');
    }
}
