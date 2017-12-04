@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-user-plus"></i> Nuevo Encargado</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Nuevo Encargado</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
 <div class="container">         
      <div class="row">
        <div class='col-sm-10'>
<legend>Datos del encargado</legend>
{!!Form::model($encargado,['route'=>['encargado.update',$encargado->id],'method'=>'PUT','autocomplete'=>'off'])!!}
<div class="form-group">
    {!!Form::label('Nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('Apellido','Apellido:')!!}
    {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
  </div>
  
   <div class="form-group">
    {!!Form::label('RutEncargado','Rut:')!!}
    {!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'xxxxxxxx-x','readonly' => 'true'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('SexoEncargado','Sexo:')!!}
    {!!Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino', 'O' => 'Otro'], null, ['class' => 'form-control selectpicker'])!!}
</div>
<div class="form-group">
               {!!Form::label('FnacimientoPaciente','Fecha de nacimiento:')!!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                   {!!Form::date('fnacimiento', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>
<div class="form-group">
    {!!Form::label('EmailEncargado','Email:')!!}
     {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'example@gmail.com'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('NcelularEncargado','Celular:')!!}
    {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'569xxxxxxxx'])!!}
  </div>
  <hr>
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