<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugaspikets extends Model
{
     protected $table='petugaspikets';

    protected $fillable = ['nama_petugas', 'hari','tanggal'];
    
    public $timestamps = true;

     public function absensisiswa()
    {
        return $this->hasMany('App\absensisiswas','id_petugaspikets');
    }
}
