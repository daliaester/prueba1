@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
          <h1><i class="fa fa-credit-card"></i> Caja</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Caja</li>
          </ol>
  <br>
        </section>

@include('alerts.success')
 <section class="content">
<div class="panel-body">

<form class="navbar-form navbar-left pull-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>

</div>
<div class="panel panel-primary">
   <div class="panel-body">
<div class="col-xs-12 table-responsive">
<table class="table table-striped">
<thead>
<tr>
                    <th>Pagos</th>
                    <th>Paciente</th>
                    <th>Rut</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    
                  
</tr>
</thead>

<tbody>
  @foreach($paci as $pacientes)
  <tr>
 <td><a href="{!! route('pagos',['id'=>$pacientes->id]) !!}" class="btn btn-block btn-warning btn-xs btn-flat"><i class="fa fa-credit-card"></i>  Pagos</a></td>
 <td>{{$pacientes->nombre}} {{$pacientes->apellido}}</td>
 <td>{{$pacientes->rut}}</td>
 <td>{{$pacientes->direccion}}</td>
 <td>{{$pacientes->email}}</td>
 <td>{{$pacientes->celular}}</td> 
 
 </tr>             
   @endforeach
   </tbody>
</table>
</div>
</div>
</div>
  {!! str_replace ('/?', '?', $paci-> render ()) !!}

</section>

@endsection 