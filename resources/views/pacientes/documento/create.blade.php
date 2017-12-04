@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-user-plus"></i> Nuevo Documento</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Nuevo Documento</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
 <div class="container">         
      <div class="row">
        <div class='col-sm-10'>

           

{!!Form::open(['route'=>'documento.store', 'method'=>'POST','autocomplete'=>'off'])!!}
<legend>Documentos del Paciente</legend>
<input type="hidden" name="paciente" value="{{ $paciente->id }}"> 
            
 <div class="form-group">
    {!!Form::label('archivo','Archivo:')!!}
    {!!Form::file('archivo')!!}
  </div>
            
<div class="form-group">
    {!!Form::label('Nombre','Nombre del documento:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del documento'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('uBICACION','Ubicación:')!!}
    {!!Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>'Ubicación'])!!}
  </div>
  
   <div class="form-group">
    {!!Form::label('tipo','Tipo:')!!}
    {!!Form::select('tipo', ['Imagen' => 'Imagen', 'Documento' => 'Documento', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Elige un tipo de archivo'])!!}
            </div>
             <div class="form-group">
    {!!Form::label('descripcion','Descripcion: (Opcional)')!!}
    {!!Form::textarea('descripcion', null, ['class' => 'form-control','placeholder'=>'Escribe una nota opcional'])!!}
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