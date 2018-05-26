<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleAcidoHialuronico extends Model
{
    //
    protected $table = 'detallesacidoshialuronicos';

    public function acidoHialuronico()
    {
        return $this->belongsTo('App\AcidoHialuronico', 'acidoHialuronico_id');
    }  
}
