<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock; 
use App\Insumo; 
use App\Http\Requests;
use App\Http\Requests\InsumoCreateRequest;
use App\Http\Requests\InsumoUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InsumoController extends Controller
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
        $stock = Stock::find($id);
        if($stock != null){
            return view('/stock.insumos.create',compact('stock'));
        }else{
            return resource('stock','StockController');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsumoCreateRequest $request)
    {
        $insumo = new Insumo;
        $insumo->nombre = $request->input('nombre');
        $insumo->fabricante = $request->input('fabricante');
        $insumo->descripcion = $request->input('descripcion');
        $insumo->caducidad = $request->input('caducidad');
        $insumo->tipo = $request->input('tipo');
        $insumo->fecha_ingreso = $request->input('fecha_ingreso');
        $insumo->cantidad = $request->input('cantidad');
        $insumo->fecha_reposicion = $request->input('fecha_reposicion');
        $insumo->imagen = $request->input('imagen');
        $stock = $request->input('stock');
        $insumo->stock()->associate($stock);
        $insumo->save();
        return redirect('stock')->with('message','Insumo agregado al inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $insumo = Insumo::find($id);
       if($insumo != null){
             return view('/stock.insumos.index',compact('insumo'));

        }else{
            return resource('stock','StockController');
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
    public function update(InsumoUpdateRequest $request, $id)
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
