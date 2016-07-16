<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDownload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('download',function(Blueprint $table){

            $table -> increments('id');
            $table -> string('nama_file',100);
            $table -> date('tgl_upload');
            $table -> integer('downloaded');
            $table -> string('ket',100);


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
        Schema::drop('download');
    }
}
