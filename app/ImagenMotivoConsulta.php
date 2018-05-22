<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenMotivoConsulta extends Model
{
    //
    protected $table = 'imagenesmotivosconsultas';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }
}
