<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Role;
use Illuminate\Support\Carbon;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['name'=>'admin',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ],
            ['name'=>'buss',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ],
            ['name'=>'user',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
