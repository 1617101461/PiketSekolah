<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table='kelas';

    protected $fillable=['id_jurusans','nama_kelas'];

    public $timestamps= true;

    public function jurusan()
    {
        return $this->belongsTo('App\jurusans','id_jurusans');
    }

     public function siswa()
    {
        return $this->hasMany('App\siswas','id_siswas');
    }
}
