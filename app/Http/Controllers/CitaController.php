<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente; 
use App\Especialidad;
use App\Especialista;
use App\Cita;
use App\Http\Requests\CitaUpdateRequest;
use App\Http\Requests\CitaCreateRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paci = Paciente::paginate(10);
        $rut = Paciente::lists('rut','id');
        return view('agenda.index',compact('rut','paci'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CitaCreateRequest $request)
    {
        $cita = new Cita;
        $cita->fecha = $request->input('fecha');
        $cita->hora = $request->input('hora');
        $cita->nota = $request->input('nota');
        $paciente = $request->input('paciente');
        $cita->paciente()->associate($paciente);
        $cita->save();
        return redirect('/agenda')->with('message','Cita Asignada al Paciente');
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
        if($paciente != null){
            return view('/pacientes.cita.index',compact('paciente'));

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
    public function update(CitaUpdateRequest $request, $id)
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
