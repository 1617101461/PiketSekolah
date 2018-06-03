<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusans extends Model
{
     protected $fillable = ['nama_jurusan'];
    public $timestamps = true;

    public function kelas()
    {
        return $this->hasMany('App\kelas','id_jurusans');
    }
}
