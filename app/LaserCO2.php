<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaserCO2 extends Model
{
    //
    protected $table = 'laseresco2';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }
}
