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
                $table -> string('tema',40);
                $table -> string('narasumber',40);
                $table -> string('tempat',40);
                $table -> date('tgl_mulai');
                $table -> date('tgl_selesai');
                $table -> text('isi');

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
        Schema::drop('workshop');
    }
}
