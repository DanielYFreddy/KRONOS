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
}
