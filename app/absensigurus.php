<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensigurus extends Model
{
    protected $table='absensigurus';

    protected $fillable=['id_gurus','keterangan'];

    public $timestamps= true;

    public function guru()
    {
        return $this->belongsTo('App\gurus','id_gurus');
    }
}
