<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    //
    protected $table = 'sk';
    protected $fillable = ['id','sk','workshop_id'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
