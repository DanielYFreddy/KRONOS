<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlergiaMedicamentoAlimento extends Model
{
    //
    protected $table = 'alergiasmedicamentosalimentos';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
