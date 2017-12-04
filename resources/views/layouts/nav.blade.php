@section('nav')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{!!URL::to('/dashboard')!!}"><i class="fa fa-dashboard"></i> Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a href="{!!URL::to('/agenda')!!}"><i class="fa  fa-calendar-minus-o"></i> Agenda</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Pacientes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{!!URL::to('/pacientes')!!}">Inicio</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{!!URL::to('/pacientes/create')!!}">Nuevo paciente</a></li>
            
          </ul>
        </li>
        
        <li><a href="{!!URL::to('/pagos')!!}"><i class="fa fa-credit-card"></i> Caja</a></li>
          
          <li><a href="{!!URL::to('/stock')!!}"><i class="fa fa-cubes"></i> Inventario</a></li>
          <li><a href="{!!URL::to('/citas')!!}"><i class="fa fa-bell-o"></i> Mis Citas</a></li>
          <li><a href="{!!URL::to('/tratamientos')!!}"><i class="fa fa-medkit"></i> Mis Tratamientos</a></li>
          <li><a href="{!!URL::to('/pacientes')!!}"><i class="fa fa-users"></i> Mis Usuarios</a></li>
          
      </ul>
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endsection 