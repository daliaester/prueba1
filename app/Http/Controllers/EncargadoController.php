<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encargado;
use App\Paciente; 
use App\Http\Requests;
use App\Http\Requests\EncargadoCreateRequest;
use App\Http\Requests\EncargadoUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = Paciente::find($id);
        if($paciente != null){
            return view('pacientes.encargado.create',compact('paciente'));
        }else{
            return resource('pacientes','PacientesController');
        }
        
         
    }
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EncargadoCreateRequest $request)
    {
        $encargado = new Encargado;
        $encargado->nombre = $request->input('nombre');
        $encargado->apellido = $request->input('apellido');
        $encargado->rut = $request->input('rut');
        $encargado->fnacimiento = $request->input('fnacimiento');
        $encargado->sexo = $request->input('sexo');
        $encargado->celular = $request->input('celular');
        $encargado->email = $request->input('email');
        $encargado->save();
        $paciente = $request->input('paciente');
        $encargado->Pacientes()->attach($paciente);
        
        return redirect('pacientes/'.$paciente.'/detalle')->with('message','Encargado agregado');
    }

    public function show($id)
    {
        $encargado = DB::table(encargado as en)->join(encargado_has_paciente as has,has.idencargado,'=','en.id')->join('paciente as p','p.id,'=','has.idpaciente)->where(p.id,$id)->get();
        
        

        if($paciente != null){
             return view('/pacientes.encargado.index',compact('paciente','encargado'));

        }else{
            return resource('pacientes','PacientesController');
        }
    }

  
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $encargado =  Encargado::find($id);
        return view('pacientes.encargado.edit',['encargado'=>$encargado,'paciente'=>$paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EncargadoUpdateRequest $request, $id)
    {
        $paciente = Paciente::find($id);
        $encargado = Encargado::find($id);
        $encargado->fill($request->all());
        $encargado->save();

        Session::flash('message','Encargado editado');
        return redirect::to('pacientes/'.$paciente.'/ficha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Encargado::destroy($id);

        Session::flash('message','Encargado eliminado');
        return redirect::to('pacientes/'.$paciente.'/ficha');
    }
}
