<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gurus extends Model
{
      protected $table='gurus';

    protected $fillable = ['nik','nama', 'jk','tempat_lahir','tanggal_lahir','alamat','keahlian_bidang_studi'];
    
    public $timestamps = true;

    public function absensiguru()
    {
        return $this->hasone('App\absensigurus','id_gurus');
    }
}
