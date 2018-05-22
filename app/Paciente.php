<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'pacientes';

    public function antecedenteHeredoFamiliar()
    {
        return $this->hasOne('App\AntecedenteHeredoFamiliar');
    }

    public function antecedentePersonalPatologico()
    {
        return $this->hasOne('App\AntecedentePersonalPatologico');
    }

    public function antecedentePersonalNoPatologico()
    {
        return $this->hasOne('App\AntecedentePersonalNoPatologico');
    }
    
    public function alergiaMedicamentoAlimento()
    {
        return $this->hasOne('App\AlergiaMedicamentoAlimento');
    }

    public function cirugia()
    {
        return $this->hasOne('App\Cirugia');
    }

    public function examenesFisicos()
    {
        return $this->hasMany('App\ExamenFisico');
    }

    public function motivosConsultas()
    {
        return $this->hasMany('App\MotivoConsulta');
    }
}
