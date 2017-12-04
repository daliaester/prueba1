<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente; 
use App\Ficha_medica; 
use App\Http\Requests;
use App\Http\Requests\FichaCreateRequest;
use App\Http\Requests\FichaUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     


    public funcion crear($id)
    {
        $paciente = Pacientes::findOrFail($id);
        return view('/pacientes.ficha',compact('paciente'));
        // mostrar formulario para crear ficha y mandar con compact
    }

    public function crear(Request $r)
    {
        // recibe el id
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index($id)
    {
        $paciente = Paciente::find($id);
        $ficha = DB::table('ficha_medica')->where('paciente_id',$id)->get();
        
        
        if($paciente != null){
             return view('/pacientes.ficha.index',compact('paciente','ficha'));

        }else{
            return resource('pacientes','PacientesController');
        }
      
     }
    
    
        public function create($id)
    {
        
        $paciente = Paciente::find($id);
        if($paciente != null){
            return view('pacientes.ficha.create',compact('paciente'));
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
    public function store(FichaCreateRequest $request)
    {
        
        
        $ficha = new Ficha_medica;
        $ficha->peso = $request->input('peso');
        $ficha->altura = $request->input('altura');
        $ficha->alergia = $request->input('alergia');
        $ficha->enfermedad_patologia = $request->input('enfermedad_patologia');
        $ficha->enfermedad_parafuncional = $request->input('enfermedad_parafuncional');
        $ficha->tratamiento_medico = $request->input('tratamiento_medico');
        $ficha->medicamento_actual = $request->input('medicamento_actual');
        $ficha->terapia = $request->input('terapia');
        $ficha->habito_fumador = $request->input('habito_fumador');
        $ficha->habito_alcohol = $request->input('habito_alcohol');
        $ficha->habito_drogas = $request->input('habito_drogas');
        $paciente = $request->input('paciente');
        $ficha->paciente()->associate($paciente);
        $ficha->save();
        return redirect('pacientes/'.$paciente.'/tratamiento')->with('message','Ficha medica agregada al Paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ficha = Ficha_medica::find($id);
        if($ficha != null){
            return view('/pacientes.ficha.show',compact('ficha'));
        }else{
            return resource('ficha','FichaController');
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
        $paciente = Paciente::find($id);
        $ficha = Ficha_medica::find($id);
        return view('pacientes.ficha.edit',['ficha'=>$ficha,'paciente'=>$paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FichaUpdateRequest $request, $id)
    {
        $ficha = Ficha_medica::find($id);
        $ficha->fill($request->all());
        $ficha->save();
        Session::flash('message','Ficha editada');
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
        Ficha_medica::destroy($id);
        $paciente = Paciente::find($id);
        return redirect('pacientes')->with('message','Ficha medica eliminada');
    }
}
