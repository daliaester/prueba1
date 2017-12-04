@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
        <h1><i class="fa  fa-credit-card"></i> Pagos - {{ $paciente->nombre }} {{ $paciente->apellido }}</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
             <li class="active">Pagos</li>
          </ol>
          <br>

          </section>
 <section class="content">
  <legend><i class="fa fa-archive"></i> Registro de pagos</legend>

<div class="container">         
      <div class="row">
        <div class='col-sm-4'>
<div class="form-group">
    {!!Form::label('sexo','Mes:')!!}
    {!!Form::selectMonth('month', null, ['class' => 'form-control select2'])!!}
    <br>
    {!!Form::submit('Registrar',['class'=>'btn btn-block btn-default'])!!}
</div>
</div>
</div>
</div>

    <legend><i class="fa fa-calculator"></i> Historial de pagos</legend>

 <div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>

                
                    <th>Rut</th>
                    <th>Mes</th>
                    <th>Saldo</th>
                    
                  
</tr>
</thead>
  
<tbody class="table-hover">
 <td></td>
 <td></td>
 <td></td>
          
</tbody>

</table>

</div>
<div class="modal-footer">
      <a href="{!! route('ficha',['id'=>$paciente->id]) !!}" class="btn btn-default">VOLVER</a>
    </div>


</section>
	@endsection