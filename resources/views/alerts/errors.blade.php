@if(Session::has('message-error'))
<div class="alert alert-danger alert-dismissible" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
  {{Session::get('message-error')}}
</div>
@endif

