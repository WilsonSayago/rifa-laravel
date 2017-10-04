@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px">
	  <h3 class="col-md-12 center" ><b>Verificar Pago</b></h3>
	</div>
	<div class="row">
        @include('alerts.request')
        @include('alerts.errors')
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1" style="margin-top:50px">
			{!!Form::model($purchase,['route' => ['purcharse.update', $purchase->id], 'method'=>'PUT'])!!}
				<div class="row">
				    <div class="col-md-4 col-md-offset-2 text-center form-group">
				        {!!Form::select('estatus', ['Pagado' => 'Pagado', 'Perdido' => 'Perdido'],null, ['class' => 'form-control', 'placeholder' => 'Estatus'] )!!}
				    </div>
				</div>
				<div class="row">
				    <div class="col-md-4 text-center col-md-offset-3 form-group">
				        {!!Form::submit('Procesar',['class' => 'btn btn-primary btn-lg btn-block'])!!}
				    </div>
				</div>
			{!!Form::close()!!}
		</div>
	</div>
@stop