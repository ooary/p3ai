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

    public static function boot(){
    	parent::boot();
    	static::deleting(function($model){
    		$model -> showGolongan()->detach();
    	});

    }
    public function showGolongan(){
    	return $this->belongsToMany('App\Golongan');
    }
    public function getGolonganListAttribute(){
    	if($this->showGolongan()->count()<1){
    		return null;

    	}
    	else{
    		return $this->showGolongan()->select('golongan.id')->lists('id')->all();
    	}


    }
}
