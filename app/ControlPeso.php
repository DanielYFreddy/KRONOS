<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlPeso extends Model
{
    //
    protected $table = 'controlespesos';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }
}
