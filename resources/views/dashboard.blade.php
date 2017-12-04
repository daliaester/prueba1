@extends('layouts.home')
@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
   
      <a class="navbar-brand"><i class="fa fa-user"></i> Bienvenido/a: {!!Auth::user()->name!!} {!!Auth::user()->apellido!!}</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
      <li><a><i class="fa fa-dashboard"></i> Home</a></li>  
      </ul>
    
  </div><!-- /.container-fluid -->
</nav>


@include('alerts.errors')
    <section class="content">


         <div class="row">
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Agenda</h3>

              <p>Citas Médicas</p>
            </div>
            <div class="icon">
             
              <i class="fa fa-calendar-minus-o"></i>
            </div>
            <a href="{!! URL::to('/agenda') !!}" class="small-box-footer">
                Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
                 <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Paciente</h3>

              <p>Usuarios del Centro Dental</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{!!URL::to('/pacientes')!!}" class="small-box-footer">
            Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

   
        <!-- ./col -->
             
      <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Caja</h3>

              <p>Registro de Pagos</p>
            </div>
            <div class="icon">
              <i class="fa fa-credit-card"></i>
            </div>
            <a href="{!! URL::to('pagos') !!}" class="small-box-footer">
               Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Inventario</h3>

              <p>Administración del Inventario</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="{!! URL::to('/stock') !!}" class="small-box-footer">
           Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

  @if(Auth::user()->id == 1)

  <!-- ./col -->
       

             <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Citas</h3>

              <p>Mis Citas</p>
            </div>
            <div class="icon">
             
              <i class="fa fa-bell-o"></i>
            </div>
            <a href="{!! URL::to('/citas') !!}" class="small-box-footer">
                Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
             
      <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Tratamientos</h3>

              <p>Mis Tratamientos</p>
            </div>
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <a href="{!! URL::to('/tratamiento') !!}" class="small-box-footer">
               Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

             
 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Pacientes</h3>

              <p>Mis Usuarios</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{!! URL::to('pacientes') !!}" class="small-box-footer">
           Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

              </div>
            </section>

    

<section class="content-header">
          <h1>Configuraciones</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-lock"></i> Admin Tools</li>
      
          </ol>
          <br>
</section>

  <section class="content">
      <div class="row">
           
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-white"><i class="fion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Control de precio</span>
              <span class="info-box-number"><a href="{!! URL::to('precio') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-white"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Especialidades</span>
              <span class="info-box-number"><a href="{!! URL::to('specialty') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
     
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-white"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Usuarios del sistema</span>
              <span class="info-box-number"><a href="{!! URL::to('/usuario') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-white"><i class="fa fa-cogs"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Todas las opciones</span>
              <span class="info-box-number"><a href="{!! URL::to('/option') !!}" class="btn btn-default btn-lrg ajax">Entrar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
    </section>

@endif
 
@endsection 