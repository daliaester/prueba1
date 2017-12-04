@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-list-alt"></i> Nuevo Sucursal</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Nuevo Paciente</li>
          </ol>
          <br>
 </section>

 <section class="content">
@include('alerts.request')
 <div class="container">         
      <div class="row">
        <div class='col-sm-10'>
        
           
{!!Form::open(['route'=>'sucursal.store', 'method'=>'POST','autocomplete'=>'off'])!!}

 <legend>Nueva Sucursal</legend>
<input type="hidden" name="empresa" value="{{ $empresa->id }}"> 
 <div class="form-group">
    {!!Form::label('ciudad','Ciudad:')!!}
    {!!Form::select('ubicacion', ['Calama' => 'Calama', 'Antofagasta' => 'Antofagasta', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Elige una ciudad'])!!}
</div>

            <div class="form-group">
    {!!Form::label('direccion','Dirección:')!!}
    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección'])!!}
</div>

   <div class="form-group">
    {!!Form::label('telefono','Telefono:')!!}
    {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
  </div>
            
   <div class="form-group">
    {!!Form::label('email','Email:')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'example@gmail.com'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('descripcion','Descripción:')!!}
    {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripción'])!!}
  </div>

   
            
  <hr>

   <div class="modal-footer">
      <a href="{!! URL::to('/sucursal') !!}" class="btn btn-default">CANCELAR</a>
      {!! Form::submit('GUARDAR', ['class' => 'btn btn-success'])!!}
   </div>
	 {!!Form::close()!!}

</div>
</div>
</div>
</section>
	@endsection