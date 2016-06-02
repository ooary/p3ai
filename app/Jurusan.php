<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //

    protected $table='jurusan';
    protected $fillable =['id','jurusan'];
    public $timestamps=false;
}
