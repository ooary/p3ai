<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gallery',function(Blueprint $table){

                $table -> increments('id');
                $table -> string('nama_gallery',100);
                $table -> date('tgl_upload');

        });
        Schema::create('images',function(Blueprint $table){
                $table -> increments('id');
                $table -> string('image');
                $table -> integer('gallery_id')->unsigned();
                $table -> foreign('gallery_id')->references('id')->on('gallery');
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
        Schema::drop('images');
        
        Schema::drop('gallery');
    }
}
