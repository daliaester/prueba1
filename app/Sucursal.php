<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "sucursal";
    
    protected $primarykey='id';
    public $timestamps=false;
    
    protected $fillable = [
        
        'ubicacion',
    	'email',
        'direccion',
        'telefono',
        'descripcion'
    
    ];

    protected $guarded =[
    ];
    
    public function ciudades(){
        
        return $this->belongsToMany('App\Ciudad','ciudad_has_sucursal');
    
    } 
    
    public function usuarios(){
        
        return $this->belongsToMany('App\Usuario','usuario_has_sucursal');
        
    } 
    
 
    
     public function empresa(){
        
        return $this->belongsTo('App\Empresa');
        
    } 
  
}
