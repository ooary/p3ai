<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('adm',function(Blueprint $table){
             $table -> increments('id');
             $table -> string('nip',40);
             $table -> string('nama',100);
             $table -> integer('jurusan_id')->unsigned();
             $table -> integer('golongan_id')->unsigned();
             $table -> date('tgl_lahir');
             $table -> string('agama',15);
             $table -> string('no_hp',15);
             $table -> string('photo',100);
             $table -> enum('pendidikan',['sma','d3','s1','s2','s3']);
             $table -> string('posisi',75);
             $table -> foreign('jurusan_id')->references('id')->on('jurusan');
             $table -> foreign('golongan_id')->references('id')->on('golongan');

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
        Schema::drop('adm');
    }
}
