@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
        <h1><i class="fa fa-file-text-o margin-r-5"></i> Tratamiento</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
             <li class="active">Tratamiento</li>
          </ol>
          <br>

          </section>

  <section class="content">
 @include('alerts.request')

  <div class="container">         
      <div class="row">
        <div class='col-sm-10'>
<legend>Tratamiento del Paciente</legend>

{!!Form::open(['route'=>'tratamiento.store', 'method'=>'POST','autocomplete'=>'off'])!!}   
    <input type="hidden" name="paciente" value="{{ $paciente->id }}">
                

        
    
      <select class="form-control selectpicker" name="nombre" multiple>
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option> 
            </select>    

  <div class="form-group">
    {!!Form::label('fecha','Fecha inicio')!!}
   <input type="text" class="form-control" readonly name="fecha_inicio" id="fecha_registro" value="<?php echo date("Y/m/d"); ?>"  />
  </div>
 

    <div class="form-group">
    {!!Form::label('des','Nota:')!!}
    {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Nota'])!!}
  </div>

    <div class="form-group">
               {!!Form::label('fecha_fin','Fecha fin:')!!}
    <div class="input-group date">
        
        
                  {!!Form::date('fecha_fin', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>
                    
            
      <div class="form-group">
    {!!Form::label('status','Estado')!!}
     {!!Form::select('status', ['Completo' => 'Completo', 'Parcial' => 'Parcial', 'Otro' => 'Otro'], null, ['class' => 'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Elige el Estado'])!!}
  </div>        
  
 <div class="modal-footer">
      <a href="{!! route('tratamiento',['id'=>$paciente->id]) !!}" class="btn btn-default">CANCELAR</a>
      {!! Form::submit('GUARDAR', ['class' => 'btn btn-success'])!!}
   </div>
    
   {!!Form::close()!!}
        
</div>
</div>
</div>


</section>


	@endsection