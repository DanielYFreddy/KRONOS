<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenCryo extends Model
{
    //
    protected $table = 'imagenescryos';

    public function cryo()
    {
        return $this->belongsTo('App\Cryo', 'cryo_id');
    }  
}
