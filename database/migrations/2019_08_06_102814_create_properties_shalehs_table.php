<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesShalehsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_shalehs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shaleh_id')->unsigned();
            $table->foreign('shaleh_id')->references('id')->on('shalehs');
            $table->bigInteger('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            $table->softDeletes();
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
        Schema::dropIfExists('properties_shalehs');
    }
}
