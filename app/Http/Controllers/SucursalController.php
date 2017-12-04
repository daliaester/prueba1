<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal; 
use App\Empresa;
use App\Http\Requests;
use App\Http\Requests\SucursalCreateRequest;
use App\Http\Requests\SucursalUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;

class SucursalController extends Controller
{
      public function __construct(){
         $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.   $ciudad = ciudad::lists('ciudad','id');
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
          $empresa = Empresa::find($id);
        if($empresa != null){
            return view('empresa.sucursal.create',compact('empresa'));
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
    public function store(SucursalCreateRequest $request)
    {
        $sucursal = new Sucursal;
        $sucursal->ubicacion = $request->input('ubicacion');
        $sucursal->direccion = $request->input('direccion');
        $sucursal->telefono = $request->input('telefono');
        $sucursal->descripcion = $request->input('descripcion');
        $sucursal->email = $request->input('email');
        $empresa = $request->input('empresa');
        $sucursal->empresa()->associate($empresa);
        $sucursal->save();
        return redirect('empresa/'.$empresa.'/detalle')->with('message','Sucursal agregada al sistema');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursal::find($id);
        if($sucursal != null){
               return view('/empresa.sucursal.show',compact('sucursal'));

        }else{
            return resource('sucursal','SucursalController');
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
      
        $sucursal = Sucursal::find($id);
        return view('empresa.sucursal.edit',['sucursal'=>$sucursal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SucursalUpdateRequest $request, $id)
    {
        $empresa = Empresa::find($id);
        $sucursal = Sucursal::find($id);
        $sucursal->fill($request->all());
        $sucursal->save();

        Session::flash('message','Sucursal editada');
        return redirect::to('/empresa');
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
