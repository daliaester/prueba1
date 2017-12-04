<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Paciente; 
use App\Http\Requests;
use App\Http\Requests\ContactoCreateRequest;
use App\Http\Requests\ContactoUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index($id)
    {
        $paciente = Paciente::find($id);
        $contacto = DB::table('contacto')->where('paciente_id',$id)->get();
       
        if($paciente != null){
             return view('/pacientes.contacto.index',compact('paciente','contacto'));

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
            return view('pacientes.contacto.create',compact('paciente'));
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
    public function store(ContactoCreateRequest $request)
    {
        $contacto = new Contacto;
        $contacto->contacto = $request->input('contacto');
        $contacto->parentesco = $request->input('parentesco');
        $contacto->celular = $request->input('celular');
        $paciente = $request->input('paciente');
        $contacto->paciente()->associate($paciente);
        $contacto->save();
        return redirect('pacientes/'.$paciente.'/detalle')->with('message','Contacto agregado al Paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $contacto = Contacto::find($id);
        if($contacto != null){
            return view('/pacientes.contacto.show',compact('contacto'));
        }else{
            return resource('contacto','ContactoController');
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
        $contacto = Contacto::find($id);
        return view('pacientes.contacto.edit',['contacto'=>$contacto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoUpdateRequest $request, $id)
    {
        
        $contacto = Contacto::find($id);
        $contacto->fill($request->all());
        $contacto->save();

        Session::flash('message','Contacto editado');
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
        Contacto::destroy($id);

        Session::flash('message','Contacto eliminado');
        return redirect::to('pacientes');
    }
}
