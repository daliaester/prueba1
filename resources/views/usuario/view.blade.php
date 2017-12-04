@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
          <h1><i class="fa fa-user"></i> Usuarios del Sistema</h1>
           <ol class="breadcrumb">
           <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active"><a href="{!! URL::to('/usuario') !!}">Usuarios</a></li>
             <li class="active">Visualizar Usuarios</li>
          </ol>
  <br>
        </section>


@include('alerts.success')
<section class="content">
<div class="panel panel-primary">
<div class="panel-body">
<div class="col-xs-12 table-responsive">
<table class="table table-striped">
<thead>
<tr>
                    <th>Perfil</th>
                    <th>Nombre</th>
                    <th>Fecha nacimiento</th>
                    <th>Email</th>
                    <th>Ocupación</th>
                    <th>Opciones</th>
</tr>
</thead>

<tbody class="table-hover">
@foreach($users as $user)
                    <tr>  
                    <td><a href="{!! route('perfil',['id'=>$user->id]) !!}" class="btn btn-block btn-warning btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  Perfil</a></td>  
                    <td><strong>{{$user->name}} {{$user->apellido}}</strong></td>
                    <td>{{$user->fnacimiento}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->ocupacion}}</td>
                    <td>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-info btn-xs btn-flat'])!!}</td>
                    </tr>
 @endforeach
</tbody>
</table> 
</div>
</div>
</div>
</section>

@endsection 