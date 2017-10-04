@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px;">
		<h3 class="col-md-12 text-center" ><b>Perfil del Usuario</b></h3>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p>Nombre: {{$user->name}}</p>
		</div>
		<div class="col-md-3">
			<p>Telefono: {{$user->phone}}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p>Patrocinador: {{$user->referido}}</p>
		</div>
		<div class="col-md-6">
			<p>Saldo: {{$user->saldo}}</p>
		</div>
	</div>
	<div class="row" style="margin-top:50px;">
		<h3 class="col-md-12 text-center" ><b>Referidos</b></h3>
	</div>
	<div class="row">
		<div class="col-md-3">
			<p>Nivel 1: {!!count($nivel1)!!}</p>
		</div>
		<div class="col-md-3">
			<p>Nivel 2: {{$nivel2}}</p>
		</div>
		<div class="col-md-3">
			<p>Nivel 3: {{$nivel3}}</p>
		</div>
		<div class="col-md-3">
			<p>Nivel 4: {{$nivel4}}</p>
		</div>
	</div>
	<div class="row" style="margin-top:50px;">
	  <h3 class="col-md-12 text-center" ><b>Cuentas Bancarias</b></h3>
	</div>
	<div class="row " style="margin-top:20px;">
	    <div class="col-md-10 col-md-offset-1 table-responsive col-sm-12 col-xs-12" >
	    	<table id="tabla_vp" class="table table-bordered text-center">
	            <thead>
	            <tr>
	              <th>Nro</th>
	              <th>Titular</th>
	              <th>Email</th>
	              <th>Tipo</th>
	              <th>Banco</th>
	            </tr>
	            </thead>
	            <tbody class="searchable">
	            	@foreach($user->bankaccounts as $cuenta)	
						<tr>
							<td>{{ $cuenta->nro }}</td>
							<td>{{ $cuenta->titular }}</td>
							<td>{{ $cuenta->email }}</td>
							<td>{{ $cuenta->tipo }}</td>
							<td>{{ $cuenta->banco }}</td>
						</tr>
					@endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			{!!Html::linkRoute('user.edit',$title = 'Actualizar Datos', $parameters = [ Auth::user()->id ], $attributes = ['class'=> 'btn btn-primary  btn-sm'])!!}
		</div>
	</div>


@stop