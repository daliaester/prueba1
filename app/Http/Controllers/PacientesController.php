<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente; 
use App\Ciudad;
use App\Ficha_medica;
use App\Encargado;
use App\Pago;
use App\Http\Requests;
use App\Http\Requests\PacienteCreateRequest;
use App\Http\Requests\PacienteUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;

class PacientesController extends Controller
{

    public function index()
    {
         $paci = Paciente::paginate(10);
        return view('pacientes.index',compact('paci'));
      
     }


    public function create()
    {
        return view('pacientes.create');
    }

   
    public function store(PacienteCreateRequest $request)
    {
        
        Paciente::create($request->all());
          
        return redirect('/pacientes')->with('message','Paciente agregado');
    
    }

   
    public function show($id)
    {
        $paciente = Paciente::find($id);
        if($paciente != null){
            $paciente = $paciente->load('encargados','contactos','documentos','fichamedicas','citas');
            return view('/pacientes.show',compact('paciente'));
        }else{
            return resource('pacientes','PacientesController');
        }
    }

         public function print($idpaciente, $idencargado)
    {
          $paciente = Paciente::find($id);;
        if($paciente != null){
            $encargado = encargado::find(idencargado);
            $paciente = $paciente->load('encargado');
             return view('/pacientes.print',compact('paciente'));

        }else{
          return resource('pacientes','PacientesController');
        }

    }

         public function pagos($id)
    {
          $paciente = Paciente::find($id);;
        if($paciente != null){
            $pago = 'El cliente esta pendiente';
             return view('/pacientes.pagos',compact('paciente'));

        }else{
          return resource('pacientes','PacientesController');
        }

    }

    public function edit($id)
    {
        $paci = Paciente::find($id);
        return view('pacientes.edit',['paci'=>$paci]);
    }


    public function update(PacienteUpdateRequest $request, $id)
    {
        $paci = Paciente::find($id);
        $paci->fill($request->all());
        $paci->save();

        Session::flash('message','Usuario editado');
        return redirect::to('/pacientes');
    
    }


    public function destroy($id)
    {
        Paciente::destroy($id);

        Session::flash('message','Usuario eliminado');
        return redirect::to('/pacientes');
    }
}
