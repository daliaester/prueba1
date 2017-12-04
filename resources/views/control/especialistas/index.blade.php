@extends('dashboard')
@section('content')
@include('layouts.nav')
 <section class="content-header">
        <h1><i class="fa fa-user-md"></i> Especialista</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Especialistas</li>
          </ol>
           <br>
          </section>

 <section class="content">


      <div class="row">
       

 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-upload"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Especialista</span>
              <span class="info-box-number"><a href="{!! URL::to('/especialista/create') !!}" class="btn btn-default btn-flat">Nuevo especialista</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>
 <div class="table-responsive">
<table class="table table-hover results">
 <thead>
  <tr>
                    <th>Especialistas</th>
                    <th>Especialidad</th>
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

        
  


     </section>

  @endsection