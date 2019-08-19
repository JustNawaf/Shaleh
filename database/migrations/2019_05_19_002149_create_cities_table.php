<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        DB::table('cities')->insert([
            ['name'=>'الرياض'],
            ['name'=>'مكة المكرمة'],
            ['name'=>'المدينة المنورة'],
            ['name'=>'جدة'],
            ['name'=>'بريدة'],
            ['name'=>'تبوك'],
            ['name'=>'الدمام'],
            ['name'=>'الاحساء'],
            ['name'=>'القطيف'],
            ['name'=>'خميس مشيط'],
            ['name'=>'الطائف'],
            ['name'=>'نجران'],
            ['name'=>'حفر الباطن'],
            ['name'=>'الجبيل'],
            ['name'=>'ضباء'],
            ['name'=>'الخرج'],
            ['name'=>'الثقبة'],
            ['name'=>'ينبع'],
            ['name'=>'الخبر'],
            ['name'=>'عرعر'],
            ['name'=>'عنيزة'],
            ['name'=>'سكاكا'],
            ['name'=>'جيزان'],
            ['name'=>'القريات'],
            ['name'=>'الظهران'],
            ['name'=>'الباحة'],
            ['name'=>'الزلفي'],
        ]);

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
