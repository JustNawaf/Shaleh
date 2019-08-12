<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('properties')->insert([
            'name'=>'دورة مياه',
            'name'=>'مكيف',
            'name'=>'غرفة نوم',
            'name'=>'غسالة',
            'name'=>'انترنت',
            'name'=>'شاشة ذكية',
            'name'=>'مسبح',
            'name'=>'بيت شعر',
            'name'=>'مطبخ',
            'name'=>'ملعب كرة قدم',
            'name'=>'ملعب كرة طائرة',
            'name'=>'ملعب كرة سلة',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
