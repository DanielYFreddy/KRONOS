<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentePersonalPatologico extends Model
{
    //
    protected $table = 'antecedentespersonalespatologicos';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
