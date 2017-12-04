@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1><i class="fa fa-list-alt"></i> Empresa</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Empresa</li>
          </ol>
           <br>
          </section>

<section class="content">
     
      @include('alerts.success')   
     @include('alerts.request')
    
   <div class="panel-body">        

<a href="{!! URL::to('/empresa/create') !!}" class="btn btn-primary btn-lg"><i class="fa fa-list-alt"></i> Nueva empresa</a>
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
                   <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Detalles</th>
</tr>

</thead>
 <tbody>
 @if(empty($empresa))
     <tr><th>No Hay Empresa registrada</th></tr>
@endif
 @foreach($empresa as $empresas)

<tr>
        <td>{{$empresas->nombre}}</td>
        <td>{{$empresas->direccion}}</td>
        <td>{{$empresas->telefono}}</td>
        <td><a href="{!! route('detalle',['id'=>$empresas->id]) !!}" class="btn btn-block btn-warning btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  DETALLE</a></td>
      
 </tr>
 @endforeach
   </tbody>
</table>
 
</div>
</div>
</div>   
  

</section>       

  @endsection