<!DOCTYPE html>
<html>
<head>
  <title>Sistema de Rifas Online</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
  {!!Html::style('bootstrap/css/bootstrap.css')!!}
  {!!Html::style('font-awesome-4.7.0/css/font-awesome.min.css')!!}
  {!!Html::style('css/carousel.css')!!}
  {!!Html::style('css/base.css')!!}


  <!-- css nuevo -->
  {!!Html::style('new/style1.css')!!}
  
  
  
</head>
<body>
@include('layouts.menu-index')
@yield('content')
@include('layouts.menu-index')
@include('layouts.footer-index')
      

    {!!Html::script('jquery/jquery-3.1.1.min.js')!!}
    {!!Html::script('bootstrap/js/bootstrap.min.js')!!}
    <script src="https://maps.googleapis.com/maps/api/js"></script>

	
    
    
    
    
    {!!Html::script('new/script1.js')!!}
          
</body>
</html>