<?php
 
namespace App\Http\Controllers;
 
use App\Evento;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class EventoController extends Controller
{
    public function api()
    {
        $data = array(); //declaramos un array principal que va contener los datos
        $id = Evento::all()->lists('id'); //listamos todos los id de los eventos
        $lugar = Evento::all()->lists('lugar'); //lo mismo para lugar y fecha
        $fecha = Evento::all()->lists('fecha');
        $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos
 
       
 
        return response()->json($data); //para luego retornarlo y estar listo para consumirlo
 
    }
}