@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
        <h1> <i class="fa fa-cubes"></i> Inventario</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Inventario</li>
          </ol>
          <br>
          </section>

 <section class="content">
 @include('alerts.success')   
 <div class="panel-body">        
<a href="{!! URL::to('/stock/create') !!}" class="btn btn-primary btn-lg"><i class="fa fa-cube"></i> Nuevo</a>

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
                    <th>Tipo</th>
                    <th>Ubicación</th>
           
                   
</tr>
</thead>
 <tbody>
 @if(empty($stock))
     <tr><th>No Hay Inventario</th></tr>
@endif    
@foreach($stock as $stocks)
 
<tr>
        <td><a href="{!! route('detalleinventario',['id'=>$stocks->id]) !!}" class="btn btn-block btn-primary btn-xs btn-flat"><i class="fa fa-cube"></i> VISUALIZAR</a></td>
        <td>{{$stocks->nombre}}</td>
        <td>{{$stocks->tipo}}</td>
        <td>{{$stocks->ubicacion}}</td>
  

 </tr>
  @endforeach
   </tbody>
</table>
 
</div>
</div>
</div>
{!! $stock->render() !!}
     </section>

  @endsection