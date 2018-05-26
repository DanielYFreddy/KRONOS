<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleToxinaBotulinica extends Model
{
    //
    protected $table = 'detallestoxinasbotulinicas';

    public function toxinaBotulinica()
    {
        return $this->belongsTo('App\ToxinaBotulinica', 'toxinaBotulinica_id');
    }
}
