@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px;">
	  <h3 class="col-md-12 center" ><b>Mis Rifas</b></h3>
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
	              <th>nro_referencia</th>
	              <th>id_purchase</th>
	              <th>Estatus</th>
	              <th >Procesar</th>
	            </tr>
	            </thead>
	            <tbody class="searchable">
	            	@foreach($misrifas as $rifa)	
						<tr>
							@php 
								$product = $rifa->product;
							@endphp
							<td> <img src = "{{ asset('products/'.$product->imagen) }}" class="img-responsive" style='max-width: 80px'/></td>
							<td>{{ $rifa->nro }}</td>
							<td>{{ $rifa->estatus }}</td>
							<td>
								@if($rifa->estatus=='Por Pagar')
									{!!Html::linkRoute('notifypayment.notificar',$title = '', $parameters = [$rifa->id], $attributes = ['class'=> 'glyphicon glyphicon-usd btn btn-success'])!!}
								@endif
							</td>
						</tr>
					@endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
@stop