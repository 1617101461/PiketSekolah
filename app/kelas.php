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
        return $this->belongsTo('App\jurusan','id_jurusans');
    }

     public function siswa()
    {
        return $this->hasMany('App\siswa','id_siswas');
    }
}
