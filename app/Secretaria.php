<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = "secretaria";
    protected $fillable = ['bloqueo','usuario_id'];
}
