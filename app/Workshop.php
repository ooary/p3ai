<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    //
    protected $table = 'workshop';
    protected $fillable = ['tema','tgl_mulai','tgl_selesai','tempat','narasumber','isi'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function hasMateri(){
    	return $this -> hasMany('App\Materi');
    }
    public function hasSk(){
    	return $this -> hasMany('App\Sk');
    }
}
