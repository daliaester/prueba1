@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1><i class="fa fa-list-alt"></i> Mi Sucursal</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Mi Sucursal</li>
          </ol>
           <br>
          </section>

<section class="content">
     

<div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Descripción</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
               
                <h3><i class="fa fa-map-signs"></i> Ubicación</h3>
                <p class="lead">{{$sucursal->ubicacion}}</p>
                <h3><i class="fa fa-map-pin"></i>  Dirección</h3>
                <p class="lead">{{$sucursal->direccion}}</p>
                <h3><i class="fa fa-phone"></i> Telefono</h3>
                <p class="lead">{{$sucursal->telefono}}</p>
                <h3><i class="fa fa-file-image-o"></i> Descripción</h3>
                <p class="lead">{{$sucursal->descripcion}}</p>  
                <h3><i class="fa fa-mail-reply-all"></i> Email</h3>
                <p class="lead">{{$sucursal->email}}</p>
               
              </dl>
            </div>
            <!-- /.box-body -->
    
          </div>
  
<div class="modal-footer">
      <a href="{!! URL::to('/empresa') !!}" class="btn btn-default">VOLVER</a>
     {!!link_to_route('sucursal.edit', $title = 'EDITAR', $parameters = $sucursal->id, $attributes = ['class'=>'btn btn-warning'])!!}
   </div>

</section>       

  @endsection