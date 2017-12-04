@extends('layouts.home')
@section('content')
@include('layouts.nav')

    
 
   <link rel="stylesheet" href="{{asset('vendor/calendariofull/fullcalendar/fullcalendar.min.css')}}">
   <link rel="stylesheet" href="{{asset('vendor/calendariofull/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
        

 <section class="content-header">
        <h1><i class="fa fa-calendar-minus-o"></i> Agenda</h1>
          <ol class="breadcrumb">
            <li><a href="{!! URL::to('/dashboard') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Agenda</li>
          </ol>
          <br>
          </section>

 <section class="content">
      @include('alerts.errors')
                            @include('alerts.request')
         {!!Form::open(['route'=>'cita.store','method'=>'POST','autocomplete'=>'off'])!!}
                    <div id="responsive-modal" class="modal fade" tabindex="-1" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Registro de Nueva Cita</h4>
                        </div>
                        
                        <div class="modal-body">
                         <input type="hidden" name="paciente" value="{{ $paciente->id }}"> 
                            <div class="form-group">
                                {!!Form::label('nombre','Nombre:')!!}
                              {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre...'])!!}
                                
                            </div>
                            <div class="form-group">
                                 {!!Form::label('apellido','Apellido:')!!}
                            {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido...'])!!}
                            </div>
                    

                            <div class="form-group">
                                {!!Form::label('date_inicio', 'Fecha Inicio')!!}
                                {!!Form::text('fecha', old('fecha'), ['class' => 'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!!Form::label('time_inicio', 'Hora Inicio')!!}
                                {!!Form::text('hora', old('time_start'), ['class' => 'form-control time ui-timepicker-input'])!!}
                            </div>

                            <div class="form-group">
                                {!!Form::label('date_termino', 'Fecha Hora Fin')!!}
                                {!!Form::text('date_termino', old('date_termino'), ['class' => 'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!!Form::label('_nombreespecialista', 'Especialista')!!}
                                {!!Form::text('especialista', old('_nombreespecialista'), ['class' => 'form-control'])!!}
                            </div>
                             <div class="form-group">
                                {!!Form::label('especialidad', 'Especialidad')!!}
                                {!!Form::text('especialidad', old('_especialidad'), ['class' => 'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!!Form::label('color', 'Color de Cita')!!}
                                <div class="input-group colorpicker">
                                    {!!Form::text('color', old('color'), ['class' => 'form-control'])!!}
                                    <span class="input-group-addon">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dafault" data-dismiss="modal">CANCELAR</button>
                            {!! Form::submit('GUARDAR', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
            <div id='calendar'></div>

            <div id="modal-event" class="modal fade" tabindex="-1" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Detalle de Cita</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {{ Form::label('_rut', 'Rut Paciente') }}
                                {{ Form::text('rut', old('_rut'), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('_nombrepaciente', 'Nombre') }}
                                {{ Form::text('nombre', old('_nombrepaciente'), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('_apellidopaciente', 'Apellido') }}
                                {{ Form::text('apellido', old('_apellidopaciente'), ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('_date_inicio', 'Fecha Inicio') }}
                                {{ Form::text('_date_inicio', old('_date_start'), ['class' => 'form-control', 'readonly' => 'true']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('_time_inicio', 'Hora Inicio') }}
                                {{ Form::text('_time_inicio', old('_time_inicio'), ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('_date_termino', 'Fecha Hora Fin') }}
                                {{ Form::text('_date_termino', old('_date_termino'), ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('_nombreespecialista', 'Especialista') }}
                                {{ Form::text('_nombreespecialista', old('_nombreespecialista'), ['class' => 'form-control']) }}
                            </div>
                             <div class="form-group">
                                {{ Form::label('_especialidad', 'Especialidad') }}
                                {{ Form::text('_especialidad', old('_especialidad'), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('_color', 'Color de Cita') }}
                                <div class="input-group colorpicker">
                                    {{ Form::text('_color', old('_color'), ['class' => 'form-control']) }}
                                    <span class="input-group-addon">
                                        <i></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a id="delete" data-href="{{ url('events') }}" data-id="" class="btn btn-danger">ELIMINAR</a>
                            <button type="button" class="btn btn-dafault" data-dismiss="modal">CANCELAR</button>
                            {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                </div>
            </div>

     </section>

     @push ('scripts')
   
     <script src="{{asset('js/scheduler.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('vendor/calendariofull/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('vendor/calendariofull/bootstrap-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('vendor/calendariofull/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>

   <script>
        var BASEURL = "{{ url('/') }}";
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                selectHelper: true,

                select: function(start){
                    start = moment(start.format());
                    $('#date_inicio').val(start.format('YYYY-MM-DD'));
                    $('#responsive-modal').modal('show');
                },

                events: BASEURL + '/events',

                eventClick: function(event, jsEvent, view){
                    var date_inicio = $.fullCalendar.moment(event.inicio).format('YYYY-MM-DD');
                    var time_inicio = $.fullCalendar.moment(event.inicio).format('hh:mm:ss');
                    var date_termino = $.fullCalendar.moment(event.termino).format('YYYY-MM-DD hh:mm:ss');
                    $('#modal-event #delete').attr('data-id', event.id);
                    $('#modal-event #_rut').val(event.rut);
                    $('#modal-event #_nombrepaciente').val(event.nombrepaciente);
                    $('#modal-event #_apellidopaciente').val(event.apellidopaciente);
                    $('#modal-event #_date_inicio').val(date_inicio);
                    $('#modal-event #_time_start').val(time_inicio);
                    $('#modal-event #_date_termino').val(date_termino);
                    $('#modal-event #_nombreespecialista').val(event.nombreespecialista);
                    $('#modal-event #_especialidad').val(event.especialidad);
                    $('#modal-event #_color').val(event.color);
                    $('#modal-event').modal('show');
                }
            });

        });

        $('.colorpicker').colorpicker();

        $('#time_start').bootstrapMaterialDatePicker({
            date: false,
            shortTime: false,
            format: 'HH:mm:ss'
        });

        $('#date_end').bootstrapMaterialDatePicker({
            date: true,
            shortTime: false,
            format: 'YYYY-MM-DD HH:mm:ss'
        });

        $('#delete').on('click', function(){
            var x = $(this);
            var delete_url = x.attr('data-href')+'/'+x.attr('data-id');

            $.ajax({
                url: delete_url,
                type: 'PATCH',
                success: function(result){
                    $('#modal-event').modal('hide');
                    alert(result.message);
                },
                error: function(result){
                    $('#modal-event').modal('hide');
                    alert(result.message);
                }
            });
        });

    </script>

@endpush
@endsection