@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-ambulance"></i> Contactos de Emergencia</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li>Contactos de Emergencia</li>
          <li class="active">Nuevo Contactos</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
 <div class="container">         
      <div class="row">
        <div class='col-sm-10'>

           

{!!Form::open(['route'=>'contacto.store', 'method'=>'POST','autocomplete'=>'off'])!!}
<legend>Datos del Contacto</legend>
<input type="hidden" name="paciente" value="{{ $paciente->id }}"> 
            


  <div class="form-group">
    {!!Form::label('Contacto','Contacto:')!!}
    {!!Form::text('contacto',null,['class'=>'form-control','placeholder'=>'Nombre del Contacto'])!!}
  </div>
            
                    
<div class="form-group">
    {!!Form::label('Nombre','Parentesco:')!!}
    {!!Form::select('parentesco', ['Madre' => 'Madre', 'Padre' => 'Padre', 'Tio' => 'Tio', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Elige Parentesco'])!!}
  </div>
  
   <div class="form-group">
    {!!Form::label('Celular','Celular:')!!}
    {!!Form::number('celular',null,['class'=>'form-control','placeholder'=>'Contacto'])!!}
  </div>
            
	<div class="modal-footer">
      <a href="{!! route('ficha',['id'=>$paciente->id]) !!}" class="btn btn-default">CANCELAR</a>
      {!! Form::submit('GUARDAR', ['class' => 'btn btn-success'])!!}
   </div>
	 {!!Form::close()!!}

</div>
</div>
</div>
</section>
	@endsection