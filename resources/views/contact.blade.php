@extends('layouts.principal')
@section('content')
    <div class="container">
        <div class="row top-small">
           @include('alerts.success')
        </div>
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="row top-small">
                    <div class="col-md-12 col-xs-12 col-sm-12 text-center imagenFondo">
                        <img class="" src="{{ asset('img/contact.png') }}"><span><h2>Formulario de Contacto</h2></span>
                    </div>
                </div>
                <div class="row top-small">
                    {!!Form::open(['route'=>'mail.store', 'method' => 'POST'])!!}
                        <fieldset class="text-center">
                            <div class="row form-group">
                                <div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-xs-5 col-sm-5">  
                                    {!!Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
                                </div>
                                <div class="col-md-5 col-xs-5 col-sm-5 ">
                                    {!!Form::text('email',null,['class' => 'form-control', 'placeholder' => 'Email'])!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1">
                                    {!!Form::textarea('mensaje',null,['class' => 'form-control', 'placeholder' => 'Mensaje'])!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                    {!!Form::submit('Enviar',['class' => 'btn btn-lg btn-primary btn-block'])!!}
                                </div>
                            </div>
                        </fieldset>
                    {!!Form::close()!!}
                </div>
        </div>
        </div>
        <hr class="featurette-divider"> 
    </div>
@stop
