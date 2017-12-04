<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = "insumo";

    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable =[
    	'nombre',
    	'fabricante',
    	'descripcion',
    	'caducidad',
    	'tipo',
        'cantidad',
    	'fecha_ingreso',
    	'fecha_reposicion',
    	'imagen',
    	

    ];

 protected $guarded =[
    ];

     public function stock(){
        
        return $this->belongsTo('App\Stock');
        
    } 

    
}
