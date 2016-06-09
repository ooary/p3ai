<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    //
    protected $table = 'surat_masuk';
    protected $fillable = ['id','no_surat','tujuan','isi_surat','tgl_surat','file_surat_masuk','judul_surat'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
