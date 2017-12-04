@extends('dashboard')
@section('content')
@include('layouts.nav')

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
 <section class="content-header">
        <h1>
             Especialidad
          </h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Especialidad</li>
          </ol>
           <br>
          </section>

 <section class="content">

@include('alerts.success')      

<div class="panel-body">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-default">Nueva Especialidad</button>
</div>
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Especialidad</h4>
              </div>
              <div class="modal-body">
               @include('alerts.request')

<div class="container">         
      <div class="row">
        <div class='col-sm-5'>
      

{!!Form::open(['route'=>'specialty.store','method'=>'POST'])!!}

  <div class="form-group">
       {!!Form::text('especialidad',null,['class'=>'form-control','placeholder'=>'Especialidad'])!!}
  </div>

  {!!Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
  {!!Form::close()!!}

</div>
</div>
</div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

  

<div class="panel panel-primary">
   <div class="panel-body">
<div class="col-xs-12 table-responsive">
          <table class="table table-striped">
<thead>
<tr>
                    <th>Especialidad</th>
                    <th>Opción</th>
  </tr>
 </thead>
  <tbody>
   @foreach($specialty as $specialty)
       <tr>  
      <td>{{$specialty->especialidad}}</td>
      <td>{!!Form::open(['route'=>['specialty.destroy',$specialty],'method'=>'DELETE','onsubmit' => 'return ConfirmDelete()'])!!}<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
        </tr>
    @endforeach
 </tbody>

 
</table>

</div>
</div>
</div>   
</section>

  @endsection