<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = "cita_medica";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
        'hora',
        'fecha',
        'nota',
        
    ];
    
    protected $guarded =[
    ];
    
    public function estado(){
        
    return $this->hasOne('App\Estado');
        
    } 
    
    public function tratamiento(){
        
        return $this->belongsTo('App\Tratamiento');
        
    } 
 
       public function paciente(){
        
        return $this->belongsTo('App\Paciente');
        
    } 
    
    
      public function evaluaciones(){
        
        return $this->hasMany('App\Evaluacion');
        
    } 
    
    
      public function problemas(){
        
        return $this->hasMany('App\Problema_detectado');
        
    } 
   
     public function paso_citas(){
        
        return $this->hasMany('App\Paso_cita');
        
    } 
}


