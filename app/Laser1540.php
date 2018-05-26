<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laser1540 extends Model
{
    //
    protected $table = 'laseres1540';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }
}
