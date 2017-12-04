<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente; 
use App\Tratamiento; 
use Session; 
use Redirect;
use App\Http\Requests;
use App\Http\Requests\TratamientoCreateRequest;
use App\Http\Requests\TratamientoUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $paciente = Paciente::find($id);
        if($paciente != null){
            $paciente = $paciente->load('tratamientos','documentos','fichamedicas','citas');
            return view('especialista.index',compact('paciente'));
        }else{
            return resource('pacientes','PacientesController');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = Paciente::find($id);
        if($paciente != null){
            return view('especialista.procedimiento.create',compact('paciente'));
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
    public function store(TratamientoCreateRequest $request)
    {
        $tratamiento = new Tratamiento;
        $tratamiento->nombre = $request->input('nombre');
        $tratamiento->descripcion = $request->input('descripcion');
        $tratamiento->fecha_inicio = $request->input('fecha_inicio');
        $tratamiento->fecha_fin = $request->input('fecha_fin');
        $tratamiento->status = $request->input('status');
        
        $paciente = $request->input('paciente');
        $tratamiento->paciente()->associate($paciente);
        $tratamiento->save();
        return redirect('pacientes/'.$paciente.'/tratamiento')->with('message','Tratamiento agregado al Paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        $tratamiento = DB::table('tratamiento')->where('paciente_id',$id)->get();
        
        if($paciente != null){
            return view('especialista.procedimiento.index',compact('paciente','tratamiento'));
        }else{
            return resource('pacientes','PacientesController');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
