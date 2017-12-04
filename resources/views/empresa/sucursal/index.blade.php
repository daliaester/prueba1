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
                <h3>Nombre</h3>
                <p class="lead"><i class="fa fa-industry"></i> </p>
                <h3>Ubicación</h3>
                <p class="lead"><i class="fa fa-map-signs"></i>  </p>
                <h3>Sitio Web</h3>
                <p class="lead"><i class="fa fa-safari"></i> </p>
                <h3>Dirección</h3>
                <p class="lead"><i class="fa fa-map-pin"></i>  </p>
                <h3>Telefono</h3>
                <p class="lead"><i class="fa fa-phone"></i>  </p>
                <h3>Email</h3>
                <p class="lead"><i class="fa fa-mail-reply-all"></i>  </p>
                <h3>Logo</h3>
                <p class="lead"><i class="fa fa-file-image-o"></i>  </p>
              </dl>
            </div>
            <!-- /.box-body -->
    
    <a class="btn btn-app">
                <i class="fa fa-edit"></i> Editar
              </a>
          </div>
  


</section>       

  @endsection