<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Plan_Tratamiento;

class Paciente extends Model
{
      protected $fillable = [
      	//obligatorios
        'nombre1', 'nombre2', 'apellido1', 'apellido2', 
        'fechaNacimiento', 'email', 'ocupacion', 
        'domicilio', 'telefono', 'sexo', 
        //no obligatorios
        'responsable', 'direccion_de_trabajo','recomendado','historiaOdontologica'
    ];

    public function anexos()
    {
        return $this->hasMany('App\Anexo', 'pacienteId');
    }

    public function events()
    {
        return $this->hasMany('App\Events');
    }

    public function getPlanesTratamiento() {
        $planes = array();
        foreach($this->events as $event){
            foreach($event->plan_tratamientos as $plan){
                array_push($planes, $plan);
            }
        }
        return $planes;
    }

}
