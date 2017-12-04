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

  <div class="container">         
      <div class="row">
        <div class='col-sm-10'>
<legend>Ficha médica del Paciente</legend>
{!!Form::open(['route'=>'ficha.store', 'method'=>'POST','autocomplete'=>'off'])!!}
    
    <input type="hidden" name="paciente" value="{{ $paciente->id }}">
    <input type="hidden" name="fecha_registro" id="fecha_registro" value="<?php echo date("d/m/Y"); ?>"  />

<div class="form-group">
    {!!Form::label('Peso','Peso:')!!}
    {!!Form::number('peso',null,['class'=>'form-control','placeholder'=>'KG'])!!}
  </div>
            
    <div class="form-group">
    {!!Form::label('Altura','Altura:')!!}
    {!!Form::number('altura',null,['class'=>'form-control','placeholder'=>'CM'])!!}
  </div>
            
  <div class="form-group">
    {!!Form::label('AlegiasMedicas','Alegias:')!!}
    {!!Form::text('alergia',null,['class'=>'form-control','placeholder'=>'Alergias'])!!}
  </div>

   <div class="form-group">
    {!!Form::label('EnfermedadesPatologicas','Enfermedades Patologicas:')!!}
    {!!Form::text('enfermedad_patologia',null,['class'=>'form-control','placeholder'=>'Enfermedades Patologicas'])!!}
  
  </div>
      
  <div class="form-group">
    {!!Form::label('EnfermedadesParafuncional','Enfermedades')!!}
    {!!Form::text('enfermedad_parafuncional',null,['class'=>'form-control','placeholder'=>'Enfermedades'])!!}
  </div>
  
  <div class="form-group">
    {!!Form::label('TratamientoMedico','Tratamiento Medico:')!!}
    {!!Form::text('tratamiento_medico',null,['class'=>'form-control','placeholder'=>'Tratamiento Medico'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('MedicamentoActual','Medicamento Actual:')!!}
    {!!Form::text('medicamento_actual',null,['class'=>'form-control','placeholder'=>'Medicamento Actual'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('Terapia','Terapia:')!!}
    {!!Form::text('terapia',null,['class'=>'form-control','placeholder'=>'Terapia'])!!}
  </div>


  <div class="form-group">
    {!!Form::label('HabitoFumador','Fumador:')!!}

                  <div class="radio">
                    <label>
                      {!!Form::radio('habito_fumador', 'Si')!!}
                      Si -  El paciente declara que es un fumador en la actualidad
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                     {!!Form::radio('habito_fumador', 'No', true)!!} 
                      No - El paciente declara que no es fumador
                    </label>
                  </div>
                 
                </div>
                <div class="form-group">
    {!!Form::label('HabitoAlcohol','Alcoholico:')!!}

                  <div class="radio">
                    <label>
                      {!!Form::radio('habito_alcohol', 'Si')!!}
                      Si -  El paciente declara que consume alcohol en la actualidad
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      {!!Form::radio('habito_alcohol', 'No', true)!!}
                      No - El paciente declara que no consume alcohol
                    </label>
                  </div>
                 
                </div>
  <div class="form-group">
    {!!Form::label('HabitoDroga','Drogas:')!!}

                  <div class="radio">
                    <label>
                      {!!Form::radio('habito_drogas', 'Si')!!}
                      Si -  El paciente declara que consume cualquier tipo de drogas en la actualidad
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      {!!Form::radio('habito_drogas', 'No', true)!!}
                      No - El paciente declara que no consume drogas
                    </label>
                  </div>
                 
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