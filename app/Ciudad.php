<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudad";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
     	'ciudad'     	
     ];

    protected $guarded =[
    ];
    
    public function sucursales(){
        
        return $this->belongsToMany('App\Sucursal','ciudad_has_sucursal');
        
    } 
}
