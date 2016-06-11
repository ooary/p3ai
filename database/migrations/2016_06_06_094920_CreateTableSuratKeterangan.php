<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuratKeterangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sk',function(Blueprint $table){

            $table -> increments('id');
            $table -> string('sk',40);
            $table -> integer('workshop_id')->unsigned();
            $table -> foreign('workshop_id')->references('id')->on('workshop');
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
        Schema::drop('sk');
    }
}
