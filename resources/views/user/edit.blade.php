@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px">
	  <h3 class="col-md-12 center" ><b>Editar Perfil</b></h3>
	</div>
	<div class="row">
        @include('alerts.request')
        @include('alerts.errors')
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1" style="margin-top:50px">
			{!!Form::model($user,['route' => ['user.update', $user->id], 'method'=>'PUT'])!!}
				<fieldset>
				    <div class="form-group">
				        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo'])!!}
				    </div>
				    <div class="form-group">
				        {!!Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefono'])!!}
				    </div>
				    <div class="form-group">
						{!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])!!}
					</div>
					<div class="form-group">
						{!!Form::password('password_confirmation',['class' => 'form-control', 'placeholder' => 'Repita Contraseña'])!!}
					</div>
				    {!!Form::submit('Actualizar',['class' => 'btn btn-lg btn-success btn-block'])!!}
				</fieldset>
			{!!Form::close()!!}
		</div>
	</div>
@stop