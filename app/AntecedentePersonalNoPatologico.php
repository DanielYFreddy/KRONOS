<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentePersonalNoPatologico extends Model
{
    //
    protected $table = 'antecedentespersonalesnopatologicos';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
