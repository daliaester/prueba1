@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1> <i class="fa fa-cubes"></i> Inventario</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Inventario</li>
          </ol>
          <br>
          </section>

 <section class="content">
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          Nombre del Inventario: {{ $stock->nombre }}.
        
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-10 invoice-col">
         Descripción
          <address>
         
            {{$stock->descripcion}}
          </address>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              
              <th>Inventario</th>
              <th>Ubicación</th>
              <th>Tipo</th>
              
             
            </tr>
            </thead>
            <tbody>
            <tr>
            
              <td>{{ $stock->nombre }}</td>
              <td>{{ $stock->ubicacion }}</td>
              <td>{{$stock->tipo}}</td>
          
             
            </tr>
           
            </tbody>
          </table>
        </div>
       
          <div class="modal-footer">  
       {!!Form::open(['route'=>['stock.destroy',$stock],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!}
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>        
     {!!link_to_route('stock.edit', $title = 'EDITAR', $parameters = $stock->id, $attributes = ['class'=>'btn btn-warning'])!!}
              <a href="{!! URL::to('/stock') !!}" class="btn btn-default">VOLVER</a>
   </div>
          
      </div>
      <!-- /.row -->

     
 
    </section>
     
         <legend>Insumos</legend>
   <div class="panel-body">        
<a href="{{ route('newinsumo',['id'=>$stock->id]) }}" class="btn btn-warning btn-lg"><i class="fa fa-file-archive-o"></i> NUEVO</a>

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
                    
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                    <th>Detalles</th>
</tr>
</thead>
 <tbody>
@if(empty($insumo))
     <tr><th>Inventario no tiene Insumos</th></tr>
@endif
 @foreach($insumo as $insumos)     
<tr>
    
        <td>{{ $insumos->nombre }}</td>
        <td>{{ $insumos->tipo }}</td>
        <td>{{ $insumos->cantidad }}</td>
        <td><a href="{{ route('detalleinsumo',['id'=>$stock->id]) }}" class="btn btn-block btn-warning btn-xs btn-flat"><i class="fa fa-file-text-o margin-r-5"></i>  DETALLE</a></td>
      
 </tr>
 @endforeach
   </tbody>
</table>
 
</div>
</div>
</div>
 
</section>
  @endsection