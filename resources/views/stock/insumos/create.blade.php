@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-cube"></i> Nuevo Insumo</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/stock') !!}">Inventario</a></li>
          <li class="active">Ingresar Insumos</li>
          </ol>
          <br>
 </section>

@include('alerts.request')

 <section class="content">
 <div class="container">         
 <div class="row">
 <div class='col-sm-10'>
 <legend>Insumo</legend>

{!!Form::open(['route'=>'insumo.store','method'=>'POST','autocomplete'=>'off'])!!}
 <input type="hidden" name="stock" value="{{ $stock->id }}"> 
  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Insumo'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('fabricante','Fabricante:')!!}
    {!!Form::text('fabricante',null,['class'=>'form-control','placeholder'=>'Fabricante'])!!}
  </div>
     
  <div class="form-group">
      {!!Form::label('cantidad','Cantidad:')!!}
    {!!Form::number('cantidad',null,['class'=>'form-control','placeholder'=>'ej. 12'])!!}
  </div>
  <div class="form-group">
               {!!Form::label('caducidad','Caducidad:')!!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                   {!!Form::date('caducidad', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>
     
  <div class="form-group">
               {!!Form::label('fecha_ingreso','Fecha ingreso:')!!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                   {!!Form::date('fecha_ingreso', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>
 <div class="form-group">
    {!!Form::label('tipo','Tipo:')!!}
    {!!Form::select('tipo', ['Liquido' => 'Liquido', 'Caja' => 'Caja', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'title'=>'Elige un tipo'])!!}
</div>
  <div class="form-group">
    {!!Form::label('descripcion','Descripción:')!!}
    {!!Form::textarea('descripcion', null, ['class' => 'form-control','placeholder'=>'Escribe una descripción del producto'])!!}
     </div>

<div class="form-group">
    {!!Form::label('imagen','Imagen: (Opcional)')!!}
    {!!Form::file('imagen')!!}
  </div>
    
     
 <div class="modal-footer">
      <a href="{!! URL::to('/stock') !!}" class="btn btn-default">CANCELAR</a>
      {!! Form::submit('GUARDAR', ['class' => 'btn btn-success'])!!}
   </div>
{!!Form::close()!!}

</div>
</div>
</div>
</section>

@endsection  
