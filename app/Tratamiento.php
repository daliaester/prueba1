<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = "tratamiento";
    
    protected $primarykey='id';
    public $timestamps=false;
    
    protected $fillable = [  
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'status'    
    ];
    
     protected $guarded =[
    ];
    
      public function citas(){
        
        return $this->hasMany('App\Cita');
        
    } 
    
     public function pago(){
        
        return $this->belongsTo('App\Pago');
        
    } 
    
     public function Paciente(){
        
        return $this->belongsTo('App\Paciente');
        
    } 

    
}

