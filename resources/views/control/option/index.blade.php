@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1><i class="fa fa-cogs"></i> Configuración</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Opciones</li>
          </ol>
           <br>
          </section>

 <section class="content">


      <div class="row">
       
 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fion ion-ios-gear-outline"></i></span>

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
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

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
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

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
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sucursal</span>
              <span class="info-box-number"><a href="{!! URL::to('/sucursal') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Trabajadores</span>
              <span class="info-box-number"><a href="{!! URL::to('/trabajador') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ocupacion</span>
              <span class="info-box-number"><a href="{!! URL::to('/ocupacion') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
 
 
 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Especialistas </span>
              <span class="info-box-number"><a href="{!! URL::to('especialistas') !!}" class="btn btn-default btn-flat">Ver</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

        
  


     </section>

  @endsection