@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa fa-file-archive-o"></i> Documentos</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Documentos</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
<div class="panel-body">
<a href="{{ route('createdocumento',['id'=>$paciente->id]) }}" class="btn btn-warning btn-lg"><i class="fa fa-file-archive-o"></i> NUEVO</a>

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
                    <th>Visualizar</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                  
</tr>
</thead>
 <tbody>
@if(empty($documento))
     <tr><th>No Hay Documentos</th></tr>
@endif
 @foreach($documento as $documentos)
<tr>
      
        <td><a href="{!! route('detalledocumento',['id'=>$documentos->id]) !!}" class="btn btn-block btn-warning btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  VISUALIZAR</a></td>
        <td>{{$documentos->nombre}}</td>
        <td>{{$documentos->ubicacion}}</td>
        <td>{{$documentos->tipo}}</td>
          
       
    
        
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