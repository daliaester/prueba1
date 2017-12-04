<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema_detectado extends Model
{
    protected $table = "problema_detectado";
     
     protected $primarykey='id';
     public $timestamps=false;

     protected $fillable = [
     	'descripcion'
     	
     ];

     protected $guarded =[
    ];
    
       public function cita(){
        
        return $this->belongsTo('App\cita');
        
    } 
    
    public function paso_citas(){
        
        return $this->hasMany('App\Paso_cita');
        
    } 
}
