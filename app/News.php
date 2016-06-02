<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table ='news';
    protected $fillable =['judul','slug','img','tgl','posted_by','isi'];
    public $timestamps = false;
}