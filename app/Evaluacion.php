<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "historial_pago";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'costo_total',
        'duracion'
        
    ];
    
     protected $guarded =[
    ];
    
    public function cita(){
        
        return $this->belongsTo('App\Cita');
        
    } 
}
