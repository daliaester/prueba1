<div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre de Usuario'])!!}
  </div>
<div class="form-group">
    {!!Form::label('Apellido:')!!}
    {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre de Usuario'])!!}
  </div>
<div class="form-group">
    {!!Form::label('Rut:')!!}
    {!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingresa Rur'])!!}
  </div>

<div class="form-group">
    {!!Form::label('Celular:')!!}
    {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Ingresa Celular'])!!}
  </div>

  <div class="form-group">
               {!!Form::label('fnacimiento','Fecha de nacimiento:')!!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                   {!!Form::date('fnacimiento', \Carbon\Carbon::now(), null, ['class' => 'form-control'])!!}
                </div>
              </div>

  <div class="form-group">
    {!!Form::label('Email:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa Email'])!!}
  </div>

<div class="form-group">
      {!!Form::label('Ciudad:')!!}
    {!!Form::select('ciudad',$ciudad, null, ['class' => 'form-control select2'])!!}
</div>

<div class="form-group">
      {!!Form::label('Ocupación:')!!}
    {!!Form::select('ocupacion',$ocupacion, null, ['class' => 'form-control select2'])!!}
</div>

  <div class="form-group">
    {!!Form::label('Contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa una contraseña'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Confirmar contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa una contraseña'])!!}
  </div>