@extends('dashboard')
@section('content')

 <section class="content-header">
        <h1>
              404
          </h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">404 Error</li>
          </ol>
          <br>
          </section>

 <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Página no encontrada.</h3>

          <p>


            No hemos podido encontrar la página que buscabas. Mientras tanto, puedes <a href="{!! URL::to('/dashboard') !!}">volver al dashboard</a> o intentar utilizar el formulario de búsqueda.
           
      
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Buscar">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

  @endsection
