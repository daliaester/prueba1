@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
        <h1><i class="fa fa-users"></i> Lista de Pacientes</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Pacientes</li>
          </ol>
          <br>
          </section>

 <section class="content">
 @include('alerts.success')       
<div class="panel-body">
<a href="{!! URL::to('/pacientes/create') !!}" class="btn btn-warning btn-lg"><i class="fa fa-user-plus"></i> NUEVO</a>

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
           <table class="table table-hover">
<thead>
<tr>
                    <th>Detalle</th>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Contacto</th>
                    <th>Fecha de nacimiento</th>
                    
                   
</tr>
</thead>
 <tbody>
@if(empty($paci))
     <tr><th>No hay Pacientes</th></tr>
@endif
@foreach($paci as $pacientes)
  <tr>      
      <td><a href="{!! route('ficha',['id'=>$pacientes->id]) !!}" class="btn btn-block btn-primary btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  DETALLE</a> <a href="{!! route('tratamiento',['id'=>$pacientes->id]) !!}" class="btn btn-block btn-primary btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  TRATAMIENTO</a></td>          
      <td>{{$pacientes->nombre}} {{$pacientes->apellido}}</td>
      <td>{{$pacientes->rut}}</td>
      <td>{{$pacientes->celular}}</td>
      <td>{{$pacientes->fnacimiento}}</td>
      
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>
</div>
{!! $paci->render() !!}
</section>
@endsection