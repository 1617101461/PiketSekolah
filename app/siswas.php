<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswas extends Model
{
      protected $table='siswas';

    protected $fillable=['id_kelas','nis','nama','jk','tempat_lahir','tanggal_lahir','alamat'];

    public $timestamps= true;


    public function absensisiswa()
    {
        return $this->belongsTo('App\absensisiswas','id_siswas');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas','id_kelas');
    }
}
