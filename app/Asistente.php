<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
          protected $table = "asistente";
     protected $primaryKey = "id";
     protected $fillable = ['bloqueo','usuario_id'];
}
}
