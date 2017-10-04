<!DOCTYPE html>
<html>
<head>
	<title></title>	
	{!!Html::style('bootstrap/css/bootstrap.min.css')!!}
	{!!Html::style('font-awesome-4.7.0/css/font-awesome.min.css')!!}

</head>
<body>
<style type="text/css">
	.main{
		margin-top: 60px;
	}
	body{
		background-image: url({{ asset('img/fondo-body.png') }});
	}
</style>
<div class="container">
	<div class="row">
		@include('layouts.menu-sesion1')	
	</div>
	<div class="main row">
		<div class="col-md-10 col-md-offset-1">
			@yield('content')
		</div>
	</div>
</div>

{!!Html::script('jquery/jquery-3.1.1.min.js')!!}
{!!Html::script('jquery/general.js')!!}
{!!Html::script('bootstrap/js/bootstrap.min.js')!!}


</body>
</html>