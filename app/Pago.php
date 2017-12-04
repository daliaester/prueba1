<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = "pago";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
        'monto',
        'valor_tratamiento',
        'fecha',
        'status'
        
    ];
    
    protected $guarded =[
    ];
    
      public function tratamientos(){
        
        return $this->hasMany('App\Tratamiento');
        
    } 
    
    public function Historial_pagos(){
        
        return $this->hasMany('App\Historial_pago');
        
    } 
   
}
