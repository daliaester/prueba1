<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ciudad;
use App\User; 
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use Session; 
Use Redirect;

class UsuarioController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad = Ciudad::lists('ciudad','id');
        
        return view('register',compact('ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());
        return redirect('login')->with('message','Usuario agregado al sistema');
    }

    /**
     * Display the specified resource.
     *                                  ciudad::create($request->all());
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::All();
        return view('usuario.view',compact('users'));
    }

     public function profile($id)
    {
        $users = User::All();
        return view('usuario.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::find($id);
          $ciudad = Ciudad::lists('ciudad','id');
       
        return view('usuario.edit',compact('user','ciudad')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Usuario editado');
        return redirect::to('usuario/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         User::destroy($id);

        Session::flash('message','Usuario eliminado del sistema');
        return redirect::to('usuario/view');
    }
}
