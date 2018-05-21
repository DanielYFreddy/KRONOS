<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedenteHeredoFamiliar extends Model
{
    //

    protected $table = 'antecedentesheredofamiliares';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
