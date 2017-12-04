<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    
    public function __construct(){
      $this->middleware('auth',['only' => 'admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

   public function especialidades()
   {
       return view('especialidades');
   }

   public function nosotros()
   {
    return view('nosotros');
   }

   public function contacto()
{
    return view('contacto');
}

}
