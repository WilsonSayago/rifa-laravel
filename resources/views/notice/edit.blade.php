@extends('layouts.cliente')

@section('content')

	<div class="container">	
		<div clas="row">
            <div class="col-md-12 text-center">
                <h3 class="featurette-heading">Ediar una noticia</h3>
            </div>
		</div>
		<div class="row">
            @include('alerts.request')
            @include('alerts.errors')
        </div>
		{!!Form::model($notice,['route' => ['notice.update', $notice->id], 'method' => 'PUT', 'files' => 'true'])!!}
			@include('notice.form')
		{!!Form::close()!!}
		<hr class="featurette-divider">
	</div>

@stop