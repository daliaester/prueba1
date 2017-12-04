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
    
<div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Descripción</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <h3><i class="fa fa-industry"></i> Nombre de la Empresa</h3>
                <p class="lead">{{$empresa->nombre}}</p>
                <h3><i class="fa fa-safari"></i> Sitio Web</h3>
                <p class="lead">{{$empresa->sitio_web}}</p>
                <h3><i class="fa fa-map-pin"></i> Dirección</h3>
                <p class="lead">{{$empresa->direccion}}</p>
                <h3><i class="fa fa-phone"></i> Telefono</h3>
                <p class="lead">{{$empresa->telefono}}</p>
                <h3><i class="fa fa-mail-reply-all"></i> Email</h3>
                <p class="lead">{{$empresa->email}}</p>
                  @if(empty($empresa->email))
                  <p class="lead">No Hay Email registrado</p>
                  @endif
                <h3><i class="fa fa-file-image-o"></i> Logo</h3>
                <p class="lead">{{$empresa->imagen}}</p>
                    @if(empty($empresa->imagen))
                  <p class="lead">No Hay logotipo</p>
                  @endif
              </dl>
            </div>
            <!-- /.box-body -->
     <div class="modal-footer">
      <a href="{!! URL::to('/empresa') !!}" class="btn btn-default">VOLVER</a>
     {!!link_to_route('empresa.edit', $title = 'EDITAR', $parameters = $empresa->id, $attributes = ['class'=>'btn btn-warning'])!!}
   </div>
 
          </div>
    
    <legend>Sucursales</legend>
   <div class="panel-body">        
<a href="{{ route('createsucursal',['id'=>$empresa->id]) }}" class="btn btn-warning btn-lg"><i class="fa fa-file-archive-o"></i> NUEVO</a>

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
                    
                    <th>Ubicación</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Detalles</th>
</tr>
</thead>
 <tbody>

@if(empty($sucursal))
     <tr><th>No Hay Sucursal registrada</th></tr>
@endif
 @foreach($sucursal as $sucursals)
<tr>
    
        <td>{{$sucursals->ubicacion}}</td>
        <td>{{$sucursals->direccion}}</td>
        <td>{{$sucursals->telefono}}</td>
        <td><a href="{!! route('detallesucursal',['id'=>$sucursals->id]) !!}" class="btn btn-block btn-warning btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  DETALLE</a></td>
      
 </tr>
 @endforeach
   </tbody>
</table>
 
</div>
</div>
</div>


</section>       

  @endsection