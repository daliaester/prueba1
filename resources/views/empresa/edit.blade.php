@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-list-alt"></i> Empresa</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Empresa</li>
          </ol>
          <br>
 </section>

 <section class="content">
@include('alerts.request')
 <div class="container">         
      <div class="row">
        <div class='col-sm-10'>
        
           
{!!Form::model($empresa,['route'=>['empresa.update',$empresa->id],'method'=>'PUT','autocomplete'=>'off'])!!}

 <legend>Nueva Empresa</legend>

   <div class="form-group">
    {!!Form::label('direccion','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
</div>       
     <div class="form-group">
    {!!Form::label('direccion','Sitio Web: (Opcional)')!!}
    {!!Form::text('sitio_web',null,['class'=>'form-control','placeholder'=>'Sitio Web'])!!}
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
    {!!Form::label('descripcion','Descripción:')!!}
    {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripción'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('imagen','Logo: (Opcional)')!!}
    {!!Form::file('imagen')!!}
  </div>
  <hr>

   <div class="modal-footer">
      <a href="{!! URL::to('/empresa') !!}" class="btn btn-default">CANCELAR</a>
      {!! Form::submit('GUARDAR', ['class' => 'btn btn-success'])!!}
   </div>
	 {!!Form::close()!!}

</div>
</div>
</div>
</section>
	@endsection