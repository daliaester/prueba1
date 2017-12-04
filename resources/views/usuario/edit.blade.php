@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
          <h1>

              Modificar Usuario: 
            
          </h1>
            <ol class="breadcrumb">
           <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active"><a href="{!! URL::to('/usuario') !!}">Usuario</a></li>
             <li class="active"><a href="{!! URL::to('/usuario/view') !!}">Visualizar Usuario</a></li>
               <li class="active">Modificar Usuario</li>
          </ol>
          <br>

        </section>

@include('alerts.success')
@include('alerts.request')

 <section class="content">
 <div class="container">         
 <div class="row">
 <div class='col-sm-7'>
 <legend>Nuevo usuario</legend> 

{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}


@include('usuario.forms.user')


  {!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
  {!!Form::close()!!}
<br>

{!!Form::open(['route'=>['usuario.destroy',$user],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
         
</div>
</div>
</div>
</section>     

@endsection 