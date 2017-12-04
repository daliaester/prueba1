<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha_medica extends Model
{

    protected $table='ficha_medica';

    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable =[
    	'peso',
    	'altura',
    	'alergia',
    	'enfermedad_patologia',
    	'enfermedad_parafuncional',
    	'tratamiento_medico',
    	'medicamento_actual',
    	'terapia',
    	'habito_fumador',
    	'habito_alcohol',
    	'habito_drogas'
    ];

     protected $guarded =[
    ];
    
      public function paciente(){
        
        return $this->belongsTo(Paciente::class,'paciente_id');
        
    } 
   
}

