<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGolongan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('golongan',function(Blueprint $table){

            $table -> increments('id');
            $table -> string('golongan',10);
        });
        Schema::create('pangkat_golongan',function(Blueprint $table){
            $table -> increments('id');
            $table -> integer('golongan_id')->references('id')->on('pangkat');
            $table -> integer('pangkat_id')->references('id')->on('golongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('golongan');
    }
}
