<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuratKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('surat_keluar',function(Blueprint $table){
                $table -> increments('id');
                $table -> string('no_surat',20);
                $table -> string('judul_surat',100);
                $table -> date('tgl_surat');
                $table -> string('tujuan',100);
                $table -> text('isi_surat');
                $table -> string('file_surat_keluar',100);
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
        Schema::drop('surat_keluar');
    }
}
