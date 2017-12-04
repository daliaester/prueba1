@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-cube"></i> Nuevo Inventario</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/stock') !!}">Inventario</a></li>
          <li class="active">Nuevo Inventario</li>
          </ol>
          <br>
 </section>

@include('alerts.request')

 <section class="content">
 <div class="container">         
 <div class="row">
 <div class='col-sm-10'>
 <legend>Inventario</legend>

{!!Form::open(['route'=>'stock.store','method'=>'POST','autocomplete'=>'off'])!!}
 
  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Inventario'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('ubicacion','Ubicación:')!!}
    {!!Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>'Ubicación'])!!}
  </div>
 <div class="form-group">
    {!!Form::label('tipo','Tipo:')!!}
    {!!Form::select('tipo', ['Medicamentos' => 'Medicamentos', 'Aparatos dentales' => 'Aparatos dentales', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'title'=>'Elige un tipo de inventario'])!!}
</div>
  <div class="form-group">
    {!!Form::label('descripcion','Descripción:')!!}
    {!!Form::textarea('descripcion', null, ['class' => 'form-control','placeholder'=>'Escribe una descripción del producto'])!!}
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
