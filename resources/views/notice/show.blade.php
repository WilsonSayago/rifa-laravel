<style type="text/css">
.thumbnail>img {
    display: block;
    vertical-align: middle;
    border: 0;
    height: 250px;
    
}
</style>

@extends('layouts.cliente')
@section('content')
<div class="row" style="margin-top:50px;">
		<h3 class="col-md-12 center" ><b>{{$notice->titulo}}</b></h3>
	</div>
	<div class="row top-small">
		@include('alerts.request')
		@include('alerts.success')
		@include('alerts.errors')
    </div>
	<div class="row">
  		<div class="col-md-8">
  			<div class="thumbnail">
              	<img src="{{ asset('notices/'.$notice->imagen) }}" class="img-responsive">
        	</div>
  		</div>
  		<div class="col-md-4">
  			<div coldspan=4>
	  			<div class="row" align="center">
					<h3>{{$notice->fecha}}</h3>
				</div>
				<div class="row" align="left">
					<p>{{$notice->contenido}}</p>
				</div>
				{!!Form::close()!!}
			</div>
  		</div>
	</div>
@stop