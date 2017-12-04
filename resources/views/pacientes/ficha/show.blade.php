@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
            <h1><i class="fa fa-file-text-o margin-r-5"></i> Opciones</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
             <li>Ficha Medica</li>
             <li class="active">Opciones</li>
               
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')


    <div class="modal-footer">
     
     {!!Form::open(['route'=>['ficha.destroy',$ficha],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!}   
     
    <button type="submit" class="btn btn-danger">ELIMINAR</button>
      <a href="{{ route('editficha',['id'=>$paciente->id]) }}" class="btn btn-warning">EDITAR</a>
         <a href="{!! route('ficha',['id'=>$paciente->id]) !!}" class="btn btn-default">VOLVER</a>
    </div>
 @endforeach

</section>

 
	@endsection