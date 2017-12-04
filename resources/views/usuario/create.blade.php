@extends('dashboard')
@section('content')
@include('layouts.nav')

  <section class="content-header">
        <h1>
              Registrar Usuario
            
          </h1>
          <ol class="breadcrumb">
           <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active"><a href="{!! URL::to('/usuario') !!}">Usuario</a></li>
         
               <li class="active">Registrar Usuario</li>
          </ol>
          <br>

          </section>

@include('alerts.request')

 <section class="content">
 <div class="container">         
 <div class="row">
 <div class='col-sm-7'>
 <legend>Nuevo usuario</legend> 

{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
@include('usuario.forms.user')
{!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!!Form::close()!!}

</div>
</div>
</div>
</section>

@endsection  
