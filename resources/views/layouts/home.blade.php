<!doctype html>
<html lang="{{ app()->getLocale() }}">
<html>
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediWork System @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->

 <script>

  function ConfirmDelete()
  {
  var x = confirm("¿Estás seguro que deseas eliminar?");
  if (x)
    return true;
  else
    return false;
  }

</script>
   
      
   <link href="{{asset('css/select2.min.css')}}" />
   <script src="{{asset('js/select2.min.js')}}"></script>
   <link rel="stylesheet" href="//www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css">
   <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">         
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">         
   <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
   <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
   <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
   <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.css')}}">
    
  
</head>
    
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">


<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{!! URL::to('/dashboard') !!}" class="navbar-brand">MEDIWORK SYSTEM</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

           
   
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-life-buoy"></i> Ayuda<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{!!URL::to('/manual')!!}">Manual de Usuario</a></li>
                <li><a href="{!!URL::to('/help')!!}">Contacto</a></li>
                <li class="divider"></li>
                <li><a href="{!!URL::to('/about')!!}">Acerca de...</a></li>
              </ul>
            </li>
           @if(Auth::user()->id == 1)
            <li><a href="{!!URL::to('/option')!!}"><i class="fa fa-cogs"></i> Opciones</a></li>
            @endif
             <li><a href="{!!URL::to('empresa')!!}"><i class="fa fa-list-alt"></i> Empresa</a></li>
            
          </ul>
            
            <ul class="nav navbar-nav">
      
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
                <span class="hidden-xs"><i class="fa fa-user"></i> Hola, {!!Auth::user()->name!!}</span>
              </a>
              <ul class="dropdown-menu">
           
                <li class="user-header"><p>{!!Auth::user()->name!!} {!!Auth::user()->apellido!!}</p></li>
            
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="{!! URL::to('/logout') !!}" class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
                      
      <div class="content-wrapper">
        
        <section class="content">
               @yield('nav')    
                 
                  @yield('content')
     
        </section>
      </div>
 
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
         <b>Version</b> BETA 0.8.5
      </div>
        <strong> &copy; 
            <script>
                        document.write(new Date().getFullYear())
                    </script> MediWork System.</strong> 
    </div>
    <!-- /.container -->
  </footer>
</div>


  <!-- jQuery -->
    <script src="//www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/validarRUT.js')}}"></script>

   
  </body>
</html>