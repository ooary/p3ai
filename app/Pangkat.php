<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    //

    protected $table ='pangkat';
    protected $fillable =['id','pangkat'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function showGolongan(){
    	return $this->belongsToMany('App\Golongan');
    }
}
