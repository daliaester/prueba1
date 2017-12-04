<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    protected $table = "Especialistas";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
        
        'bloqueo'
        
        ];
    
    protected $guarded =[
    ];
    
    public function especialidad(){
        
        return $this->hasOne('App\Especialidad');
        
    } 
    
        public function usuarios(){
        
        return $this->hasOne('App\Usuario');
        
    } 
}

