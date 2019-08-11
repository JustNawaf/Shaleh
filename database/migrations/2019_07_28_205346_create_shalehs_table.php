<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShalehsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shalehs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->mediumText('description');
            $table->integer('quality');
            $table->integer('price');
            $table->integer('price_in_ramadan');
            $table->integer('price_in_eid_ftr');
            $table->integer('price_in_eid_adha');
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
        Schema::dropIfExists('shalehs');
    }
}
