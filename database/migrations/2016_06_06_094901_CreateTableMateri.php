<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMateri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('materi',function(Blueprint $table){
                $table->increments('id');
                $table->string('nama_materi',40);
                $table->integer('workshop_id')->unsigned();
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
        Schema::drop('materi');
    }
}
