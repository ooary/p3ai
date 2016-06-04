<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dosen',function(Blueprint $table){
            $table -> increments('id');
            $table -> string('nip',100);
            $table -> string('nama',40);
            $table -> integer('jurusan_id')->unsigned();
            $table -> integer('golongan_id')->unsigned();
            $table -> date('tgl_lahir');
            $table -> string('agama',25);
            $table -> string('no_hp',15);
            $table -> enum('pendidikan',['sma','d3','s1','s2','s3']);
            $table -> text('ket');
            $table -> string('thn_serdos');
            $table -> integer('gelombang');
            $table -> string('status',3);
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
        Schema::drop('dosen');
    }
}
