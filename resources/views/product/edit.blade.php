@extends('layouts.cliente')

@section('content')

	<div class="container">	
		<div clas="row">
            <div class="col-md-12 text-center">
                <h3 class="featurette-heading">Editar Rifa</h3>
            </div>
		</div>
		<div class="row">
            @include('alerts.request')
            @include('alerts.errors')
        </div>
		{!!Form::open(['route' => ['product.update', $product], 'method' => 'PUT', 'files' => 'true'])!!}
			@include('product.form')
		{!!Form::close()!!}
		<hr class="featurette-divider">
	</div>

@stop