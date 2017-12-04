@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa-user-plus"></i> Encargados</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Encargados</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
<div class="panel-body">
<a href="{{ route('createencargado',['id'=>$paciente->id]) }}" class="btn btn-warning btn-lg"><i class="fa fa-user-plus"></i> NUEVO</a>

<form class="navbar-form navbar-left pull-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>

</div>
  
     <div class="panel panel-primary">
   <div class="panel-body">
<div class="col-xs-12 table-responsive">
          <table class="table table-striped">
<thead>
<tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Opciones</th>
</tr>
</thead>
 <tbody>
@if(empty($encargado))
     <tr><th>No Tiene Encargados</th></tr>
@endif
 @foreach($encargado as $encargados)
<tr>
        <td>{{$encargados->nombre}} {{$encargados->apellido}}</td>
        <td>{{$encargados->rut}}</td>
        <td>{{$encargados->celular}}</td>
        <td>{{$encargados->email}}</td>
        
        <td><a href="{{ route('editencargado',['id'=>$paciente->id]) }}" class="btn btn-warning"><i class="fa fa-user-plus"></i> EDITAR</a></td>
        
 </tr>
  @endforeach
   </tbody>
</table>
 
</div>
</div>
</div>

     <div class="modal-footer">
      <a href="{!! route('ficha',['id'=>$paciente->id]) !!}" class="btn btn-default">VOLVER</a>
    </div>

</section>

	@endsection