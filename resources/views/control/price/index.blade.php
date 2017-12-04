@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1>
             Control de Precios
          </h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Control de Precios</li>
          </ol>
           <br>
          </section>

 <section class="content">


<div class="panel panel-primary">
   <div class="panel-body">
<div class="col-xs-12 table-responsive">
          <table class="table table-striped">
 <thead>
  <tr>
                    <th>Especialidad</th>
                    <th>Precio</th>
                    <th>Opción</th>
  </tr>
 </thead>
  
 <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                  
 </tbody>
 
</table>

</div>
</div>
</div>
<
</section>

  @endsection