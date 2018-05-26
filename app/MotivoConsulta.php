<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoConsulta extends Model
{
    //
    protected $table = 'motivosconsultas';

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function examenFisico()
    {
        return $this->belongsTo('App\ExamenFisico', 'examenFisico_id');
    }

    public function imagenesMotivosConsultas()
    {
        return $this->hasMany('App\ImagenMotivoConsulta', 'motivoConsulta_id');
    }

    public function toxinasBotulinicas()
    {
        return $this->hasMany('App\ToxinaBotulinica', 'motivoConsulta_id');
    }

    public function acidosHialuronicos()
    {
        return $this->hasMany('App\AcidoHialuronico', 'motivoConsulta_id');
    }

    public function laseresCO2()
    {
        return $this->hasMany('App\LaserCO2', 'motivoConsulta_id');
    }

    public function laseres1540()
    {
        return $this->hasMany('App\Laser1540', 'motivoConsulta_id');
    }

    public function cryos()
    {
        return $this->hasMany('App\Cryo', 'motivoConsulta_id');
    }

    public function controlesPesos()
    {
        return $this->hasMany('App\ControlPeso', 'motivoConsulta_id');
    }
}
