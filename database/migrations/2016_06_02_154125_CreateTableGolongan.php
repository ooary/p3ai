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
            $table -> string('golongan',75);
            
        });
        Schema::create('golongan_pangkat',function(Blueprint $table){
            $table -> increments('id');
            $table -> integer('golongan_id')->unsigned();
            $table -> integer('pangkat_id')->unsigned();
            $table ->foreign('golongan_id')->references('id')->on('golongan');
            $table ->foreign('pangkat_id')->references('id')->on('pangkat');
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
        Schema::drop('golongan_pangkat');
        
        Schema::drop('golongan');
    }
}
