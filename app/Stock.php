<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stock";
       
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [

    	'nombre',
    	'descripcion',
    	'ubicacion',
    	'tipo'
    ];

     protected $guarded =[
    ];

     public function insumo(){
        
        return $this->hasOne('App\Insumo');
        
    } 
    
   
}


