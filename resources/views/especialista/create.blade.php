@extends('dashboard')
@section('content')
@include('layouts.nav')

  <section class="content-header">
        <h1>
              Agregar un especialista
            
          </h1>
          <ol class="breadcrumb">
           <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/option') !!}">Opciones</a></li>
              <li class="active">Agregar un especialista</li>
          </ol>
          <br>

          </section>


@include('alerts.request')

<div class="container">         
      <div class="row">
        <div class='col-sm-10'>
          <legend>Nuevo especialista</legend>

{!!Form::open(['route'=>'especialista.store','method'=>'POST'])!!}

<form role="form">
  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Dr. Juan'])!!}
  </div>
      <div class="form-group">
    {!!Form::label('apellido','Apellido:')!!}
    {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Jofre'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('rut','Rut:')!!}
    {!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'108219883'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('email','Correo:')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'example@gmail.com'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('celular','Celular:')!!}
    {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'000000000'])!!}
  </div>
<div class="form-group">
    {!!Form::label('specialty_id','Especialidad:')!!}
    {!!Form::select('specialty_id', ['O' => 'Otro'], null, ['class' => 'form-control select2'])!!}

</div>
<div class="form-group">
    {!!Form::label('especialidad','especialidad:')!!}
    {!!Form::select('especialidad')!!}
    </div>
<div class="form-group">
    {!!Form::label('ciudad_id','Ciudad:')!!}
    {!!Form::select('ciudad_id', ['O' => 'Otro'], null, ['class' => 'form-control select2'])!!}
</div>
<div class="form-group">
    {!!Form::label('sucursal_id','Sucursal:')!!}
    {!!Form::select('sucursal_id', ['O' => 'Otro'], null, ['class' => 'form-control select2'])!!}
</div>
    <div class="form-group">
    {!!Form::label('imagen','Imagen: (Opcional)')!!}
    {!!Form::file('imagen')!!}
  </div>
</form>
  {!!Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
  {!!Form::close()!!}

</div>
</div>
</div>


	@endsection  
