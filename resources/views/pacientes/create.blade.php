@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-user-plus"></i> Nuevo Paciente</h1>
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
          <legend>Registro del Paciente</legend>
           
{!!Form::open(['route'=>'pacientes.store', 'method'=>'POST','autocomplete'=>'off'])!!}

  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Daniel'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('apellido','Apellido:')!!}
    {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Black'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('email','Email:')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'example@gmail.com'])!!}
  </div>
     <div class="form-group">
      {!!Form::label('rut','Rut:')!!}
   
    <input type="text" id="rut" name="rut" class="form-control" required oninput="checkRut(this)" placeholder="xxxxxxxx-x">
       
  </div>
  <div class="form-group">
    {!!Form::label('celular','Celular:')!!}
    {!!Form::number('celular',null,['class'=>'form-control','placeholder'=>'569xxxxxxxx'])!!}
  </div>
<div class="form-group">
    {!!Form::label('sexo','Sexo:')!!}
    {!!Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'title'=>'Elige el sexo'])!!}
</div>
<div class="form-group">
               {!!Form::label('fnacimiento','Fecha de nacimiento:')!!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                   {!!Form::date('fnacimiento', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>
 <div class="form-group">
    {!!Form::label('ciudad','Ciudad:')!!}
    {!!Form::select('ciudad', ['Calama' => 'Calama', 'Antofagasta' => 'Antofagasta', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Elige una ciudad'])!!}
</div>


<div class="form-group">
    {!!Form::label('direccion','Direccion:')!!}
    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
  </div>

  <div class="form-group">
     <label>Menor de edad:</label>

                  <div class="radio">
                    <label>
                     {!!Form::radio('menor', 'Si')!!}
                      Si -  El paciente declara que es menor de edad
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      {!!Form::radio('menor', 'No', true)!!}
                      No - El paciente declara que es mayor de edad
                    </label>
                  </div>
                 
                    <div class="form-group">
    {!!Form::label('descripcion','Nota: (Opcional)')!!}
    {!!Form::textarea('nota', null, ['class' => 'form-control','placeholder'=>'Escribe una nota opcional'])!!}
     </div>


                </div>
<div class="form-group">
    {!!Form::label('imagen','Imagen: (Opcional)')!!}
    {!!Form::file('imagen')!!}
  </div>
            
   <div class="modal-footer">
      <a href="{!! URL::to('/pacientes') !!}" class="btn btn-default">CANCELAR</a>
      {!! Form::submit('GUARDAR', ['class' => 'btn btn-success'])!!}
   </div>
	 {!!Form::close()!!}

</div>
</div>
</div>
</section>
	@endsection