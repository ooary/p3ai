<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    //
    protected $table = 'materi';
    protected $fillable = ['id','nama_materi','workshop_id'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
