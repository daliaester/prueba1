<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    
    
public function getReporteEvaluacion($id){
        $evaluacion = Evaluacion::find($id);
	
	if($evaluacion != null){
		$evaluacion = $evaluacion->with('cita_medica.paciente','cita_medica.especialista');
		dd($evaluacion);
        return view('vista',compact('evaluacion'));
    }
        else
        {
		dd('no existe');
	   }
	
    }

public function getReporteTratamiento($id){

$tratamiento = Tratamiento::find($id);

	if ($tratamiento != null){
		$tratamiento = $tratamiento->with('evaluacion.cita_medica.paciente', 'evaluacion.cita_medica.especialista');
		dd($tratamiento);
        return view('nombrevista', compact('tratamiento'));
	}
	else {
        dd('no existe');
		}

}    
    
public function getReportePago($id){
	$pago = pago::find($id);
	
	if ($pago != null){
		$pago = $pago->with('tratamiento.evaluacion.cita_medica.paciente');
		return view ('nombrevista2', compact('pago'));
		else {
			}
	} 
}

public function getReporteCitaMedica($id){

	$cita = $cita::find($id);
	
	if ($cita != null){
		$cita = $cita->with('paciente', 'especialista');
		return view ('nombrevista3', compact('cita');
		
	}else{
	
	}
		
}


    
