<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cirugia extends Model
{
    //
    protected $table = 'cirugias';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
