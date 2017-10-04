@extends('layouts.cliente')
@section('content')
<style type="text/css">
	.panel-green {
    border-color: #5cb85c;
}
.panel-green > .panel-heading {
    border-color: #5cb85c;
    color: white;
    background-color: #5cb85c;
}
.panel-yellow {
    border-color: #f0ad4e;
}
.panel-yellow > .panel-heading {
    border-color: #f0ad4e;
    color: white;
    background-color: #f0ad4e;
}
.panel-red {
    border-color: #d9534f;
}
.panel-red > .panel-heading {
    border-color: #d9534f;
    color: white;
    background-color: #d9534f;
}
.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #FFFF33;/*#99E1FF imagen 1- #FFFF33 imagen 2- 38FFB3 imagen 3*/
    border: 1px solid #777;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
    height: 480px;
}
.thumbnail>img {
    display: block;
    vertical-align: middle;
    border: 0;
    height: 300px;
    
}
</style>
	<div class="row" style="margin-top:50px">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div><b>Mis Rifas</b></div>
                            <div class="huge"><h4>
                                @if ($nrifas)
                                    {!!count($nrifas)!!}
                                @else
                                    0
                                @endif
                            <h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-paypal fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div><b>Por Pagar</b></div>
                            <div class="huge"><h4>
                                {!!$nporpagar!!}
                            <h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-university fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div><b>Pagadas</b></div>
                            <div class="huge"><h4>
                                {!!$npagadas!!}
                            <h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-exclamation fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div><b>Ultimas Noticias</b></div>
                            <div class="huge"><h4>
                                @if (!$nrifas))
                                    {!!count($nrifas)!!}
                                @else
                                    0
                                @endif
                            <h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:50px">
        <h2><b>Lista de Ultimos Productos:</b></h2>
    </div>
    <div class="row " style="margin-top:50px">

        @foreach($products as $product)
            <div class="col-sm-6 col-xs-6 col-md-4 ">
                <div class="thumbnail">
                    <img src="{{ asset('products/'.$product->imagen) }}" class="img-responsive">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p>Costo del Nro. {{$product->monto}}</p>
                        <p>Nros Disponibles {{$product->serie}}</p>
                        <p>{!!Html::linkRoute('product.show',$title = '', $parameters = [$product->id], $attributes = ['class'=> 'glyphicon glyphicon-search btn btn-success'])!!}</p>
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
	
@stop