@extends('layouts.cliente')

@section('content')

	<div class="container">	
		<div clas="row">
            <div class="col-md-12 text-center">
                <h3 class="featurette-heading">Agregar un nuevo Slider</h3>
            </div>
		</div>
		<div class="row">
            @include('alerts.request')
            @include('alerts.errors')
        </div>
		{!!Form::open(['route' => 'slider.store', 'method' => 'POST', 'files' => 'true'])!!}
			@include('slider.form')
		{!!Form::close()!!}
		<hr class="featurette-divider">
	</div>

@stop