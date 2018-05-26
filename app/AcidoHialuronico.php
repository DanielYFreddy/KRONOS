<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcidoHialuronico extends Model
{
    //
    protected $table = 'acidoshialuronicos';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }

    public function detallesAcidosHialuronicos()
    {
        return $this->hasMany('App\DetalleAcidoHialuronico', 'acidoHialuronico_id');
    }
}
