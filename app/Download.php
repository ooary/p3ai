<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    //
    protected $table = 'download';
    protected $fillable = ['nama_file','tgl_upload','downloaded','ket'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
