@extends('dashboard')
@section('content')
@include('layouts.nav')

 <section class="content-header">
        <h1><i class="fa fa-bell-o"></i> Mis citas</h1>
           <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! URL::to('/especialista') !!}">Especialista</a></li>
             <li class="active">Mis citas</li>
          </ol>
          <br>

          </section>

 

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
                   
                    <th>Paciente</th>
                    <th>Procedimiento</th>
                 
                    <th>Hora</th>
                    <th>Estado</th>
                    
</tr>
</thead>

<tbody>
       
         <tr>            
                  
                    <td></td>
                    <td></td>
                    <td></td>
                   
                    <td></td>
        </tr>

 </tbody>
</table>
   
</div>
</div>
</div> 
<div class="well well-sm">...</div>








</section>
	@endsection