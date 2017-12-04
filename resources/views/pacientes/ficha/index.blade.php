@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
            <h1><i class="fa fa-file-text-o margin-r-5"></i> Ficha Medica</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
             <li class="active">Ficha Medica</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
<div class="panel-body">
<a href="{{ route('createficha',['id'=>$paciente->id]) }}" class="btn btn-warning btn-lg"><i class="fa fa-file-text-o margin-r-5"></i> NUEVO</a>
</div>
@if(empty($ficha))
    <hr>
   <div class="well well-sm">El Paciente no posee una Ficha Médica</div>
   @endif
 @foreach($ficha as $fichas)
   <section class="invoice">
       
{!!link_to_route('ficha.edit', $title = 'EDITAR', $parameters = $fichas->id, $attributes = ['class'=>'btn btn-warning'])!!}
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        
         <strong>Peso</strong>
          
           <P>{{$fichas->peso}} KLG.</P>
             <hr>
             <strong>Altura</strong>
          
           <P>{{$fichas->altura}} CM.</P>
             <hr>
            <strong>Alergias</strong><br>
            <P>{{$fichas->alergia}}.</P>
              <hr>

              <strong>Enfermedad Patologicas</strong>

              <p>{{$fichas->enfermedad_patologia}}.</p>
             
                       
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

           <strong>Enfermedad Parafuncional</strong>

              <p>{{$fichas->enfermedad_parafuncional}}.</p>

              <hr>
       
               <strong>Tratamientos Médicos</strong>

              <p>{{$fichas->tratamiento_medico}}.</p>

              <hr>
               <strong>Tratamientos Actual</strong>

              <p>{{$fichas->medicamento_actual}}.</p>

            
               <hr>

             <strong>Terapia</strong>

              <p>{{$fichas->terapia}}.</p>
                
        </div>
        
        <div class="col-sm-4 invoice-col">

                
               <strong>Habito Fumador</strong>

              <p>{{$fichas->habito_fumador}}.</p>

              <hr>
               <strong>Habito Alcohol</strong>

              <p>{{$fichas->habito_alcohol}}.</p>

            
               <hr>

              <strong>Habito Drogas</strong>

              <p>{{$fichas->habito_drogas}}.</p>
               
        </div>
          
      </div>
 
    </section>

    <div class="modal-footer">
      
    </div>
   
 @endforeach
  <div class="modal-footer">
      <a href="{!! route('tratamiento',['id'=>$paciente->id]) !!}" class="btn btn-default">VOLVER</a>
    </div>
</section>

 
	@endsection