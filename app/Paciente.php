<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table='paciente';

    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable =[
    	'nombre',
    	'apellido',
    	'rut',
    	'fnacimiento',
    	'sexo',
    	'email',
    	'celular',
    	'menor',
    	'direccion',
    	'ciudad',
        'nota',
    	'imagen'
    ];

    protected $guarded =[
    ];
    
    public function encargados(){
        
        return $this->belongsToMany('App\Encargado','encargado_has_paciente')->withPivot('perentesco','paciente_id');
        
    } 
    
     public function documentos(){
        
        return $this->hasMany('App\Documento');
        
    } 
    
    public function contactos(){
        
        return $this->hasMany('App\Contacto');
        
    } 
    
     public function fichamedicas()
     
     {
        
        return $this->hasMany(Ficha_medica::class);
        
     } 
    
      public function citas(){
        
        return $this->hasMany('App\Cita');
        
    } 
    
     public function tratamientos(){
        
        return $this->hasMany('App\Tratamiento');
        
    } 
   
  
}


