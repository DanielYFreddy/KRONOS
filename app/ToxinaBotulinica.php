<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToxinaBotulinica extends Model
{
    //
    protected $table = 'toxinasbotulinicas';

    public function motivoConsulta()
    {
        return $this->belongsTo('App\MotivoConsulta', 'motivoConsulta_id');
    }

    public function detallesToxinasBotulinicas()
    {
        return $this->hasMany('App\DetalleToxinaBotulinica', 'toxinaBotulinica_id');
    }
}
