<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;
use App\Paciente; 
use App\Http\Requests;
use App\Http\Requests\DocumentoCreateRequest;
use App\Http\Requests\DocumentoUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DocumentoController extends Controller
{
    
     public function index($id)
    {
        $paciente = Paciente::find($id);
        $documento = DB::table('documento')->where('paciente_id',$id)->get();
        
        if($paciente != null){
             return view('/pacientes.documento.index',compact('paciente','documento'));

        }else{
            return resource('pacientes','PacientesController');
        }
      
     }
    
    public function create($id)
    {
         $paciente = Paciente::find($id);
        if($paciente != null){
            return view('pacientes.documento.create',compact('paciente'));
        }else{
            return resource('pacientes','PacientesController');
        }
    }

    /**
     * Store a newly created resource in storage.
 
 
       if($documento->paciente->id == $paciente->id){
             return view('/pacientes.documento.index');

        }else{
             return redirect()->route('/pacientes')->with('danger','usted no tiene acceso al documento seleccionado');
          
        }
 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentoCreateRequest $request)
    {
                      
        $documento = new Documento;
        $documento->archivo = $request->input('archivo');
        $documento->nombre = $request->input('nombre');
        $documento->descripcion = $request->input('descripcion');
        $documento->ubicacion = $request->input('ubicacion');
        $documento->tipo = $request->input('tipo');
        $paciente = $request->input('paciente');
        $documento->paciente()->associate($paciente);
        $documento->save();
        return redirect('pacientes/'.$paciente.'/detalle')->with('message','Documento agregado al Paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento = Documento::find($id);
        if($documento != null){
            return view('/pacientes.documento.show',compact('documento'));
        }else{
            return resource('documento','DocumentoController');
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
        $documento = Documento::find($id);
        return view('pacientes.documento.edit',['documento'=>$documento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentoUpdateRequest $request, $id)
    {
        
        $documento = Documento::find($id);
        $documento->fill($request->all());
        $documento->save();

        Session::flash('message','Documento editado');
        return redirect::to('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Documento::destroy($id);

        Session::flash('message','Documento eliminado');
        return redirect::to('pacientes');
    }
}
