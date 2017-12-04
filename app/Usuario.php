<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    
    protected $primarykey='id';
    public $timestamps=false;
    
    protected $fillable = [
        
        'nombre',
        'apellido',
        'rut',
        'fnacimiento',
        'email',
        'celular',
        'ciudad',
        'password',
        'imagen'
    ];
    
    protected $guarded =[
    ];
    
     public function sucursales(){
        
        return $this->belongsToMany('App\Sucursal','usuario_has_sucursal');
        
    } 
    
        public function especialista(){
        
        return $this->hasOne('App\Especialista');
        
    } 
}
