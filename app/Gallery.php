<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'gallery';
    protected $fillable = ['nama_gallery','tgl_upload'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function hasImage(){
    	return $this->hasMany('App\Image');
    }
}
