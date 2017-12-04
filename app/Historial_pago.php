<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_pago extends Model
{
    protected $table = "historial_pago";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
        'pago'        
    ];
    
    protected $guarded =[
    ];
    
      public function pago(){
        
        return $this->belongsTo('App\Pago');
        
    } 
}
