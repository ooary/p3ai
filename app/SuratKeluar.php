<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    //
     protected $table = 'surat_keluar';
    protected $fillable = ['id','no_surat','tujuan','isi_surat','tgl_surat','file_surat_keluar','judul_surat'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
