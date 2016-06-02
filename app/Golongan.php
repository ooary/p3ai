<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    //
    protected $table ='golongan';
    protected $fillable =['id','golongan','pangkat_id'];
    public $timestamps = false;


    public function showPangkat(){

    	return $this -> belongsToMany('App\Pangkat');
    }
}
