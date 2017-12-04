<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  
    protected $table = "estado";
    
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable = [
        'status'
        
    ];
    
    protected $guarded =[
    ];
    
    public function citas(){
        
    return $this->hasOne('App\Cita');
        
    } 
    
    
    
}
