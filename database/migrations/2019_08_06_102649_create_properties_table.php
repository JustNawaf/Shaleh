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
            $table->string('icon_name');
            $table->timestamps();
        });

        DB::table('properties')->insert([
            ['name'=>'مكيف','icon_name'=>'fas fa-fan'],
            ['name'=>'دورة مياه','icon_name'=>'fas fa-bath'],
            ['name'=>'مسبح','icon_name'=>'fas fa-swimming-pool'],
            ['name'=>'ملعب كره قدم','icon_name'=>'far fa-futbol'],
            ['name'=>'ملعب كره طائره','icon_name'=>'fas fa-volleyball-ball'],
            ['name'=>'غسالة','icon_name'=>'fas fa-bacon'],
            ['name'=>'غرف نوم','icon_name'=>'fas fa-bed'],
            ['name'=>'عدة شواء','icon_name'=>'fas fa-hamburger'],
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
