<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = "especialidad";
    
    protected $primarykey='id';
    public $timestamps=false;
    
    protected $fillable = [
        
        'especialidad'
    ];
    
    protected $guarded =[
    ];
    
    public function especialista(){
        
        return $this->hasOne('App\Especialista');
        
    } 
    
}

