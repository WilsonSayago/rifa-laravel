<style type="text/css">
.thumbnail>img {
    display: block;
    vertical-align: middle;
    border: 0;
    height: 450px;
    
}
</style> 

@extends('layouts.cliente')
@section('content')
<div class="row" style="margin-top:50px;">
		<h3 class="col-md-12 center" ><b>Consulta</b></h3>
	</div>
	<div class="row top-small">
		@include('alerts.request')
		@include('alerts.success')
		@include('alerts.errors')
    </div>
	<div class="row">
  		<div class="col-md-8">
  			<div class="thumbnail">
              	<img src="{{ asset('products/'.$product->imagen) }}" class="img-responsive">
        	</div>
  		</div>
  		<div class="col-md-4">
  			<div coldspan=4>
	  			<div class="row" align="center">
					<h3>{{$product->name}}</h3>
				</div>
				<div class="row" align="left">
					<p>fecha: {{$product->fecha}}</p>
				</div>
				<div class="row" align="left">
					<p>Serie: {{$product->serie}}</p>
				</div>
				<div class="row" align="keft">
					<p>Loteria: {{$product->loteria}}</p>
				</div>
				<div class="row" align="left">
					<p>Monto: {{$product->monto}}</p>
				</div>
				{!!Form::open(['route' => ['purcharse.store', $product->id], 'method' => 'POST'])!!}
				<div class="row" align="left">
					{!!Form::label('numero', 'Seleccione un numero')!!}
                    {!!Form::select('nro', $numbers, null, ['class' => 'form-control', 'placeholder' => 'Numeros Disponibles', 'required'])!!}
				</div>
				<div class="form-group">
					
				</div>
				<div class="row" align="center">
					{!!Form::submit('Comprar',['class' => 'btn btn-primary'])!!}
				</div>
				{!!Form::close()!!}
			</div>
  		</div>
	</div>
@stop