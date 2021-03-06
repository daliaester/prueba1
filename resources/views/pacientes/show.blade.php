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
      @include('alerts.success')   
     @include('alerts.request')
 <legend>Opciones</legend>

<div class="row">
       
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-bell-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Citas</span>
              <span class="info-box-number"><a href="{{ route('cita',['id'=>$paciente->id]) }}" class="btn btn-block btn-default">VISUALIZAR</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pagos</span>
              <span class="info-box-number"><a href="pagos" class="btn btn-block btn-default">VISUALIZAR</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-ambulance"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Emergencia</span>
              <span class="info-box-number"><a href="{{ route('contacto',['id'=>$paciente->id]) }}" class="btn btn-block btn-default">VISUALIZAR</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
 
     <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-user-secret"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Encargado</span>
              <span class="info-box-number">

              <a href="{{ route('encargado',['id'=>$paciente->id]) }}" class="btn btn-block btn-default">VISUALIZAR</a></span>
               
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         
   
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-clone"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Historial</span>
              <span class="info-box-number"><a href="pagos" class="btn btn-block btn-default">VISUALIZAR</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-file-archive-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Documentos</span>
               <span class="info-box-number"><a href="{{ route('documento',['id'=>$paciente->id]) }}" class="btn btn-block btn-default">VISUALIZAR</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    
     </div>
  <br>
   <legend>Datos del usuario</legend>
 <!-- Main content -->
    <section class="content">

   <section class="invoice">
   
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
        <strong><i class="fa fa-mobile"></i> Email</strong>

              <p class="text-muted">{{ $paciente->email }}.</p>

              <hr>
                 
               <strong><i class="fa fa-street-view"></i> Menor de edad</strong>

              <p class="text-muted">{{ $paciente->menor }}.</p>

              <hr>
             
        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
 <div class="modal-footer">
     
       
        {!!Form::open(['route'=>['pacientes.destroy',$paciente],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!}
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
        <a href="print" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> IMPRIMIR</a>      
        {!!link_to_route('pacientes.edit', $title = 'EDITAR', $parameters = $paciente->id, $attributes = ['class'=>'btn btn-warning'])!!}
        <a href="{!! URL::to('/pacientes') !!}" class="btn btn-default">VOLVER</a>
     
   </div>
 



    </section>


 
 
</section>
	@endsection