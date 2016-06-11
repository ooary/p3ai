<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GolPang extends Model
{
    //
    protected $table ='golongan_pangkat';


    public function showPangkat(){
    	return $this -> belongsTo('App\Pangkat','pangkat_id');
    }
}
