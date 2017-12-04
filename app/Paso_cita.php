<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paso_cita extends Model
{
     protected $table = "pasos_cita";
     
     protected $primarykey='id';
     public $timestamps=false;
    
    protected $fillable = [
     	'nota'
     	
     ];


    
      public function cita(){
        
        return $this->belongsTo('App\Cita');
        
    } 
    
    public function problema_detectado(){
        
        return $this->belongsTo('App\Problema_detectado');
        
    } 
    
}
