@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px">
	  <h3 class="col-md-12 center" ><b>Notificar Pago</b></h3>
	</div>
	<div class="row">
        @include('alerts.request')
        @include('alerts.errors')
    </div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1" style="margin-top:50px">
			{!!Form::open(['route' => ['notifypayment.store', $purchase->id], 'method' => 'POST'])!!}
				@include('notifypayment.form')
			{!!Form::close()!!}
		</div>
	</div>
@stop