<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
     protected $table = "encargado";
     
     protected $primarykey='id';
     public $timestamps=false;

     protected $fillable = [
     	'rut',
     	'nombre',
     	'apellido',
     	'sexo',
     	'fnacimiento',
     	'email',
     	'celular'
     	
     ];

     protected $guarded =[
    ];
    
      public function Pacientes(){
        
        return $this->belongsToMany('App\Paciente','encargado_has_paciente')->withPivot('perentesco','paciente_id');
        
    } 
}


