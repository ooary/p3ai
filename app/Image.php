<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';
    protected $fillable = ['image','gallery_id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function galleryName(){
    	return $this->belongsTo('App\Gallery');
    }
}
