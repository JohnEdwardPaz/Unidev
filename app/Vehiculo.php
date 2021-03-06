<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = ['placa'];
    public $timestamps = false; //Relacion con la tabla Ingreso_vehiculo 
    public function ingreso_vehiculo(){
        return $this->hasMany('App\Ingreso_vehiculo');
    }   
}
