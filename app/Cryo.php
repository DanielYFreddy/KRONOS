<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cryo extends Model
{
    //
    protected $table = 'cryos';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }

    public function imagenesCryos()
    {
        return $this->hasMany('App\ImagenCryo', 'cryo_id');
    }
}
