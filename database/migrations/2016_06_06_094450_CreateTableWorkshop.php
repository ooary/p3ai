<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWorkshop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('workshop',function(Blueprint $table){
                $table -> increments('id');
                $table -> string('tema',150);
                $table -> string('narasumber',150);
                $table -> string('tempat',75);
                $table -> date('tgl_mulai');
                $table -> date('tgl_selesai');
                $table -> text('isi');

        });
        Schema::create('materi',function(Blueprint $table){
                $table->increments('id');
                $table->string('nama_materi',100);
                $table->integer('workshop_id')->unsigned();
                $table -> foreign('workshop_id')->references('id')->on('workshop');

        });
        Schema::create('sk',function(Blueprint $table){

            $table -> increments('id');
            $table -> string('sk',100);
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
        Schema::drop('materi');
        Schema::drop('sk');
        
        Schema::drop('workshop');
    }
}
