<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHourTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hour_tag', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->unsignedBigInteger('hour_id');
            $table->foreign('hour_id')->references('id')->on('hours');

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
        Schema::dropIfExists('hour_tag');
    }
}
