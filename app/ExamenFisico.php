<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    //
    protected $table = 'examenesfisicos';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function motivosConsultas()
    {
        return $this->hasMany('App\MotivoConsulta', 'examenFisico_id');
    }
}
