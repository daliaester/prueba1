@extends('dashboard')
@section('content')
@include('layouts.nav')

<section class="content-header">
          <h1><i class="fa fa fa-file-archive-o"></i> contacto</h1>
          <ol class="breadcrumb">
          <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"><a href="{!! URL::to('/pacientes') !!}">Pacientes</a></li>
          <li class="active">Documento</li>
          </ol>
          <br>
 </section>

<section class="content">
@include('alerts.request')
 <div class="container">         
<legend>Vista del Documentos</legend>
     
     
     
 <div class="modal-footer">
      {!!Form::open(['route'=>['contacto.destroy',$contacto],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!} 
     <a href="{!! URL::to('/empresa') !!}" class="btn btn-default">VOLVER</a>
     <button type="submit" class="btn btn-danger">ELIMINAR</button>
     {!!link_to_route('contacto.edit', $title = 'EDITAR', $parameters = $contacto->id, $attributes = ['class'=>'btn btn-warning'])!!}
          
   </div>    
</div>
</section>
	@endsection