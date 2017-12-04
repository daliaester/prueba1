@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
        <h1><i class="fa fa-file-text-o margin-r-5"></i> Tratamientos</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
             <li class="active">Tratamientos</li>
          </ol>
          <br>

          </section>

 <section class="content">
 @include('alerts.success')
    
<div class="panel-body">
<a href="{{ route('nuevotratamiento',['id'=>$paciente->id]) }}" class="btn btn-warning btn-lg"><i class="fa fa-user-plus"></i> NUEVO</a>

<form class="navbar-form navbar-left pull-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>

</div>
<legend>Historial</legend>
<div class="panel panel-primary">
   <div class="panel-body">
<div class="col-xs-12 table-responsive">
           <table class="table table-hover">
<thead>
<tr>
                    <th>Detalle</th>
                    <th>Procedimiento</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Estado</th>
                    
                   
</tr>
</thead>
 <tbody>
@if(empty($tratamiento))
     <tr><th>El paciente no tiene tratamientos</th></tr>
@endif
@foreach($tratamiento as $tratamientos)
  <tr>      
      <td></td>          
      <td>{{$tratamientos->nombre}}</td>
      <td>{{$tratamientos->fecha_inicio}}</td>
      <td>{{$tratamientos->fecha_fin}}</td>
      <td>{{$tratamientos->status}}</td>
      
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>
</div>

</section>
@endsection