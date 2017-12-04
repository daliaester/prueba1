@extends('dashboard')
@section('content')
@include('layouts.nav')

  <section class="content-header">
        <h1>
              nuevo precio
            
          </h1>
          <ol class="breadcrumb">
           <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active"><a href="{!! URL::to('/price') !!}">Usuario</a></li>
         
               <li class="active">Registrar Usuario</li>
          </ol>
          <br>

          </section>


@include('alerts.request')



<div class="login-box">
     
     

{!!Form::open(['route'=>'price.store','method'=>'POST'])!!}

<form role="form">
  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Sebastian'])!!}
  </div>
    <div class="form-group">
    {!!Form::label('fabricante','Fabricante:')!!}
    {!!Form::text('fabricante',null,['class'=>'form-control','placeholder'=>'Black'])!!}
  </div>
  <div class="form-group">
      {!!Form::label('cantidad','Cantidad:')!!}
    {!!Form::text('cantidad',null,['class'=>'form-control','placeholder'=>'11222333-7'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('descripcion','Descripcion:')!!}
    {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'560000000'])!!}
  </div>
  <div class="form-group">
               {!!Form::label('caducidad','Caducidad:')!!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                   {!!Form::date('caducidad', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>
 <div class="form-group">
    {!!Form::label('tipo','Tipo:')!!}
    {!!Form::select('tipo', ['M' => 'Masculino', 'F' => 'Femenino', 'O' => 'Otro'], null, ['class' => 'form-control select2'])!!}
</div>
<div class="form-group">
    {!!Form::label('imagen','Imagen:')!!}
    {!!Form::file('imagen')!!}
  </div>



  {!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
  {!!Form::close()!!}



</div>

	@endsection  
