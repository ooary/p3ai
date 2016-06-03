<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table='dosen';
    protected $fillable= ['id',
    					  'nip',
    					  'nama',
                          'jurusan_id',
    					  'golongan_id',
    					  'tgl_lahir',
    					  'agama',
    					  'no_hp',
    					  'pendidikan',
    					  'ket'];
    protected $primaryKey='id';
    public $timestamps =false;

    public function showJurusan(){
    	return $this->belongsTo('App\Jurusan','jurusan_id');
    }
    public function showGol(){
        return $this->belongsTo('App\Golongan','golongan_id');
    }
}
