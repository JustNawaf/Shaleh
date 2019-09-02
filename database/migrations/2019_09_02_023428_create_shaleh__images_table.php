<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShalehImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shaleh__images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shaleh_id')->unsigned();
            $table->foreign('shaleh_id')->references('id')->on('shalehs');
            $table->string('image_name');
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
        Schema::dropIfExists('shaleh__images');
    }
}
