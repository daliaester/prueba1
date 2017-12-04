<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|



*/

Route::get('register', function () {
    return view('register');
});

route::resource('log','LogController');
route::get('logout','LogController@logout');

Route::get('/','FrontController@index');


Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('help.about');
});

Route::get('help', function () {
    return view('help.help');
});

Route::get('manual', function () {
    return view('help.manual');
});


Route::get('pacientes/{id}/detalle','PacientesController@show')->name('ficha');

Route::get('pacientes/{id}/tratamiento','TratamientoController@index')->name('tratamiento');
Route::get('pacientes/{id}/tratamiento/view','TratamientoController@show')->name('tratamientos');
Route::get('pacientes/{id}/tratamiento/nuevo','TratamientoController@create')->name('nuevotratamiento');

Route::get('pacientes/{id}/historial','PacientesController@historial')->name('historial');

Route::get('pacientes/{id}/fichamedica','FichaController@index')->name('fichamedica');
Route::get('pacientes/{id}/fichamedica/nuevo','FichaController@create')->name('createficha');
Route::get('pacientes/{id}/fichamedica/detalle','FichaController@show')->name('detalleficha');


Route::get('pacientes/{id}/documentos','DocumentoController@index')->name('documento');
Route::get('pacientes/{id}/documentos/nuevo','DocumentoController@create')->name('createdocumento');
Route::get('pacientes/{id}/documentos/detalle','DocumentoController@show')->name('detalledocumento');


Route::get('pacientes/{id}/encargado','EncargadoController@show')->name('encargado');
Route::get('pacientes/{id}/encargado/nuevo','EncargadoController@create')->name('createencargado');
Route::get('pacientes/{id}/encargado/detalle','EncargadoController@show')->name('detalleencargado');

Route::get('pacientes/{id}/print','PacientesController@print')->name('print');


Route::get('pacientes/{id}/cita','CitaController@show')->name('cita');
Route::get('pacientes/{id}/pagos','PacientesController@pagos')->name('pagos');

Route::get('pacientes/{id}/contacto','ContactoController@index')->name('contacto');
Route::get('pacientes/{id}/contacto/new','ContactoController@create')->name('newcontacto');
Route::get('pacientes/{id}/contacto/detalle','ContactoController@show')->name('detallecontacto');


Route::get('especialista/{id}/citas','SpecialistController@show')->name('citas');


Route::get('stock/{id}/detalle/insumo/nuevo','InsumoController@create')->name('newinsumo');
Route::get('stock/{id}/detalle/insumo','InsumoController@show')->name('detalleinsumo');
Route::get('stock/{id}/detalle','StockController@show')->name('detalleinventario');
Route::get('stock/{id}/print','InsumoController@print')->name('print');


Route::get('usuario/{id}/perfil','UsuarioController@profile')->name('perfil');
Route::get('usuario/{id}/citas','UsuarioController@citas')->name('citas');

Route::get('empresa/{id}/detalle','EmpresaController@show')->name('detalle');
Route::get('empresa/{id}/sucursal','SucursalController@create')->name('createsucursal');
Route::get('empresa/{id}/sucursal/detalle','SucursalController@show')->name('detallesucursal');



Route::resource('cita','CitaController');
Route::resource('pacientes','PacientesController');
Route::resource('stock','stockController');
Route::resource('agenda','CitaController');
Route::resource('pagos','PagosController');

Route::resource('citas','SpecialistController@cita');



Route::resource('historial','SpecialistController@usuario');


Route::resource('usuario','UsuarioController');
Route::resource('insumo','InsumoController');
Route::resource('tratamiento','TratamientoController');
Route::resource('precio','PriceController');
Route::resource('specialty','SpecialtyController');
Route::resource('especialista','SpecialistController');
Route::resource('option','OptionController');
Route::resource('sucursal','SucursalController');
Route::resource('ficha','FichaController');
Route::resource('encargado','EncargadoController');
Route::resource('documento','DocumentoController');
Route::resource('contacto','ContactoController');
Route::resource('empresa','EmpresaController');

Route::resource('trabajador','TrabajadorController');
Route::resource('ocupacion','OcupacionController');