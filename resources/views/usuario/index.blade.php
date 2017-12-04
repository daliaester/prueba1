@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1><i class="fa fa-user"></i> Usuarios del Sistema</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Usuarios</li>
          </ol>
          <br>
          </section>

 <section class="content">


      <div class="row">
       

<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">VISUALIZAR USUARIO</h3>
              <h5 class="widget-user-desc">Administrar y Modificar Usuarios</h5>
            </div>
           
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-8 border-right">
                  <div class="description-block">
                    <a href="{!! URL::to('/usuario/view') !!}" class="btn btn-block btn-primary btn-lg">Visualizar</a>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>


<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">CREAR USUARIO</h3>
              <h5 class="widget-user-desc">Crea un Nuevo Usuario</h5>
            </div>
            
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-8 border-right">
                  <div class="description-block">
                      <a href="{!! URL::to('/usuario/create') !!}" class="btn btn-block btn-primary btn-lg">Registrar</a>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      </div>



</section>
  @endsection