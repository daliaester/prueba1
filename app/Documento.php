<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    
    protected $table='documento';

    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable =[
    	'nombre',
    	'descripcion',
    	'ubicacion',
    	'tipo',
    	'archivo'
    ];

    protected $guarded =[
    ];
        
       public function paciente(){
        
        return $this->belongsTo('App\Paciente','paciente_id');
        
    } 
}
