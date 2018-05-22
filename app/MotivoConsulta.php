<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoConsulta extends Model
{
    //
    protected $table = 'motivosconsultas';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function examenFisico()
    {
        return $this->belongsTo('App\ExamenFisico', 'examenFisico_id');
    }

    public function imagenesMotivosConsultas()
    {
        return $this->hasMany('App\ImagenMotivoConsulta', 'motivoConsulta_id');
    }
}
