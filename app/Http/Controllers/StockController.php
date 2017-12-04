<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock; 
use App\Insumo; 
use App\Http\Requests;
use App\Http\Requests\StockCreateRequest;
use App\Http\Requests\StockUpdateRequest;
use Session; 
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $stock = Stock::paginate(10);
       
         return view('stock.index',compact('stock'));
         
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('stock.create');
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockCreateRequest $request)
    {
       
       Stock::create($request->all());
       return redirect('/stock')->with('message','Inventario agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $stock = Stock::find($id);
         $insumo = DB::table('insumo')->where('stock_id',$id)->get();
        if($stock != null){
            $stock = $stock->load('insumo');
            return view('/stock.show',compact('stock','insumo'));
        }else{
             return resource('stock','StockController');
        }       
        
    }

        public function print($id)
    {
         $stock = Stock::find($id);
        if($stock != null){
           
            return view('/stock.print',compact('stock'));

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
        $stock = Stock::find($id);
        return view('stock.edit',['stock'=>$stock]);
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
        $stock = Stock::find($id);
        $stock->fill($request->all());
        $stock->save();

        Session::flash('message','Insumo editado');
        return redirect::to('/stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Stock::destroy($id);

        Session::flash('message','Insumo eliminado');
        return redirect::to('/stock');
    }
}
