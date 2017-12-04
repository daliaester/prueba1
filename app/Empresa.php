<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresa";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
    	'nombre',
        'direccion',
    	'telefono',
        'descripcion',
    	'sitio_web',
    	'imagen'
    ];

     protected $guarded =[
    ];
    
     public function sucursales(){
        
        return $this->hasMany('App\Sucursal');
        
    } 
   
  
}
