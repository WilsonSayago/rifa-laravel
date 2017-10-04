@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px;">
	  <h3 class="col-md-12 center" ><b>Notificaciones de pago</b></h3>
	</div>
	<div class="row top-small">
		@include('alerts.request')
		@include('alerts.success')
		@include('alerts.errors')
    </div>
	<div class="row" style="margin-top:50px">
	    <div class="form-group col-md-6 col-md-offset-1 col-sm-6 col-xs-6">
		    {!!Form::label('filter', 'Buscador', ['class' => 'control-label']) !!}
		    {!! Form::text('filter',null, ['class' => 'form-control ']) !!}
	    </div>
	</div>
	<div class="row " style="margin-top:20px;">
	    <div class="col-md-10 col-md-offset-1 table-responsive col-sm-12 col-xs-12" >
	    	<table id="tabla_vp" class="table table-bordered text-center">
	            <thead>
	            <tr>
	              <th>Nro Referencia</th>
	              <th>Banco</th>
	              <th>Monto Cancelado</th>
	              <th>Monto Por Cancelar</th>
	              <th>Fecha</th>
	              <th>Estatus de la Compra</th>
	              <th colspan="">Verificar</th>
	            </tr>
	            </thead>
	            <tbody class="searchable">
	            	@foreach($notifypayments as $notifypayment)	
						<tr>
							<td>{{ $notifypayment->nro_referencia }}</td>
							<td>{{ $notifypayment->banco }}</td>
							<td>{{ $notifypayment->monto }}</td>
							<td>{{ $notifypayment->purchase->product->monto }}</td>
							<td>{{ $notifypayment->purchase->created_at }}</td>
							<td>{{ $notifypayment->purchase->estatus }}</td>
							<td>{!!Html::linkRoute('purcharse.edit',$title = '', $parameters = [$notifypayment->purchase->id], $attributes = ['class'=> 'glyphicon glyphicon-pencil btn btn-warning'])!!}
							</td>
						</tr>
					@endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
@stop