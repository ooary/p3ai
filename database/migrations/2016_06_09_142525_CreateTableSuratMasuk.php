<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuratMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('surat_masuk',function(Blueprint $table){
                $table -> increments('id');
                $table -> string('no_surat',20);
                $table -> string('judul_surat',40);
                $table -> date('tgl_surat');
                $table -> string('tujuan',20);
                $table -> text('isi_surat');
                $table -> string('file_surat_masuk',50);
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
        Schema::drop('surat_masuk');
    }
}
