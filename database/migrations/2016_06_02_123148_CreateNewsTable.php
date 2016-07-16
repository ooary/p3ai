<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('news',function(Blueprint $table){

            $table->increments('id');
            $table->string('judul',100);
            $table->string('slug_judul',150);
            $table->string('img');
            $table->text('isi');
            $table->date('tgl_posting');
            $table->integer('posted_by');
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
        Schema::drop('news');
    }
}
