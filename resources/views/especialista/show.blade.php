@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
       <h1><i class="fa fa-file-text-o margin-r-5"></i> Usuario - {{ $paciente->nombre }} {{ $paciente->apellido }}</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
             <li class="active">Ficha Clinica</li>
          </ol>
          <br>
          </section>

          
 <section class="content">
 <legend>Opciones</legend>

<div class="row">
       
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-bell-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Citas</span>
              <span class="info-box-number"><a href="cita" class="btn btn-block btn-default">Visualizar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pagos</span>
              <span class="info-box-number"><a href="pagos" class="btn btn-block btn-default">Visualizar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Contacto de emergencia</span>
              <span class="info-box-number"><a href="pagos" class="btn btn-block btn-default">Visualizar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
 
     <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user-secret"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Encargado</span>
              <span class="info-box-number">

              <a href="encargado" class="btn btn-block btn-default">Nuevo</a></span>
                {!!link_to_route('encargado.edit', $title = 'EDITAR', $parameters = $paciente->id, $attributes = ['class'=>'btn btn-block btn-warning'])!!}
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ficha Médica</span>
              <span class="info-box-number"><a href="fichamedica" class="btn btn-block btn-default">Editar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

       
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Historial</span>
              <span class="info-box-number"><a href="pagos" class="btn btn-block btn-default">Visualizar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Documentos</span>
              <span class="info-box-number"><a href="#" class="btn btn-block btn-default">Visualizar</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            {!!Form::open(['route'=>['pacientes.destroy',$paciente],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!}
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-trash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Eliminar usuario</span>
              <span class="info-box-number"><button type="submit" class="btn btn-block btn-default"><i class="fa fa-trash"></i> Eliminar</button></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          
      </div>
  
   <legend>Ficha Clínica</legend>
 <!-- Main content -->
    <section class="content">

   <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2>
          Datos del usuario
          <div class="pull-right">
             {!!link_to_route('pacientes.edit', $title = 'EDITAR', $parameters = $paciente->id, $attributes = ['class'=>'btn btn-block btn-warning'])!!}
           </div>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        
         <strong><i class="fa fa-user"></i> Nombre</strong>
          
           <P>{{ $paciente->nombre }} {{ $paciente->apellido }}.</P>
             <hr>
             <strong><i class="fa fa-user"></i> Rut</strong>
          
           <P>  {{ $paciente->rut }}.</P>
             <hr>
            <strong><i class="fa fa-map-marker margin-r-5"></i> Ciudad</strong><br>
            <P>{{ $paciente->ciudad }}.</P>
              <hr>

              <strong><i class="fa fa-map"></i> Dirección</strong>

              <p class="text-muted">{{ $paciente->direccion }}.</p>
             <hr>
                       
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

           <strong><i class="fa fa-birthday-cake"></i> Fecha de nacimiento</strong>

              <p class="text-muted">{{ $paciente->fnacimiento }}</p>

              <hr>
       
               <strong><i class="fa fa-mobile"></i> Celular</strong>

              <p class="text-muted">{{ $paciente->celular }}.</p>

              <hr>
               <strong><i class="fa fa-genderless"></i> Sexo</strong>

              <p class="text-muted">{{ $paciente->sexo }}.</p>

            
               <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Nota</strong>

              <p> {{ $paciente->nota }}.</p>
                 <hr>
        </div>
         <div class="col-sm-4 invoice-col">

                 
               <strong><i class="fa fa-street-view"></i> Menor de edad</strong>

              <p class="text-muted">{{ $paciente->menor }}.</p>

              <hr>
             
        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>

      <!-- this row will not appear when printing -->
      

 <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          Datos médicos
            <small class="pull-right"> </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-5 invoice-col">
        
         <strong><i class="fa fa-plus-square"></i> Peso</strong>
          
           <P>.</P>
             <hr>
            <strong><i class="fa fa-plus-square"></i> Altura</strong><br>
            <P></P>
              <hr>

              <strong><i class="fa fa-plus-square"></i> Alegias</strong>

              <p class="text-muted"></p>
             <hr>
               <strong><i class="fa fa-plus-square"></i> Enfermedades Patológicas</strong>

              <p class="text-muted"></p>

              <hr>
         
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
       
               <strong><i class="fa fa-plus-square"></i> Celular</strong>

              <p class="text-muted">{{ $paciente->celular }}</p>

              <hr>
               <strong><i class="fa fa-plus-square"></i> Sexo</strong>

              <p class="text-muted">{{ $paciente->sexo }}</p>

            
               <hr>

              <strong><i class="fa fa-plus-square"></i> Nota</strong>

              <p> {{ $paciente->description }} </p>
                 <hr>
        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->

<div class="row no-print">
        <div class="col-xs-12">
          <a href="print" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
          
        </div>
      </div>

      <hr>

       <legend>Contacto de emergencias</legend>

        <div class="col-sm-5 invoice-col">
        
         <strong><i class="fa fa-plus-square"></i> Telefono de emergencia</strong>
          
           <P>.</P>
             <hr>
            <strong><i class="fa fa-plus-square"></i> Parentesco</strong><br>
            <P></P>
              <hr>

              <strong><i class="fa fa-plus-square"></i> Nombre</strong>

              <p class="text-muted"></p>
             <hr>
               <strong><i class="fa fa-plus-square"></i> Enfermedades Patológicas</strong>

              <p class="text-muted"></p>

              <hr>
         
        </div>
          <legend>Historial de visitas</legend>
    
       <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Procedimientos</th>
              <th>Especialista</th>
              <th>Dia/Hora</th>
              <th>Descripción</th>
             
            </tr>
            </thead>
            <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              
             
            </tr>
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


 
 
</section>
  @endsection