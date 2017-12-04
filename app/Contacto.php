<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
     protected $table = "contacto";
    
     protected $primarykey='id';
     public $timestamps=false;
    
     protected $fillable = [
         
         'parentesco',
         'contacto',
         'celular'
      
      ];
    
     protected $guarded =[
    ];
    
    public function Paciente(){
        
        return $this->belongsTo('App\Paciente');
        
    } 
}
