<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensisiswas extends Model
{
     protected $table='absensiswas';

    protected $fillable=['id_petugaspikets','id_kelas','id_siswas','tanggal','keterangan'];

    public $timestamps= true;

    public function siswa()
    {
        return $this->belongsTo('App\siswa','id_siswas');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas','id_kelas');
    }

    public function petugaspiket()
    {
        return $this->belongsTo('App\petugaspiket','id_petugaspikets');
    }
}
