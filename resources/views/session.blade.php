@extends('layouts.principal')

@section('content')
    <div class="">
        <div class="row top-small">
               @include('alerts.request')
               @include('alerts.success')
               @include('alerts.errors')
        </div>
        <div class="row " >
            <div class="col-md-12">
                <div class="panel panel-default" >
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs ">
                            <li class="active "><a href="#home" class="" data-toggle="tab">Iniciar Sesión</a>
                            </li>
                            <li ><a href="#profile" class="" data-toggle="tab">Registrarte</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div class="row top-small">
                                    <div class="col-md-6 hidden-sm hidden-xs hidden-xs-ms">
                                        <div class="well well-blue well-lg .text-justify">
                                            <div class="row">
                                                <div class="col-md-8 text-center"><h3 class="text-white"> ¿Que esperas? Unete! </h3></div>
                                                <div class="col-md-4 ">
                                                    <span class="pull-right"><i class="text-white fa fa-user-circle-o fa-2x" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            
                                            <p>Se miembro de esta gran comunidad y empieza a ganar con un simple click!</p>
                                            <p>Participa en las rifas y no olvides, comenta y comparte nuestro sitio... Todos merecen tener esta gran oportunidad! </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="login-panel panel panel-default well-blue text-white">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <h3 class="col-md-12 text-center">Iniciar Sesión</h3>
                                                </div>
                                                {!!Form::open(['route' => 'login.store', 'method' => 'POST'])!!}
                                                    <fieldset class="text-center">
                                                        <div class="form-group">
                                                            {!!Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])!!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!!Form::password('password', ['class' => 'form-control ', 'placeholder' => 'Contraseña'])!!}
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-9 col-sm-6 col-xs-6">{!!Html::link('/','¿Olvido su Contraseña?', ['class'=>'btn text-white'])!!}</div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6">{!!Form::submit('Entrar',['class' => 'btn btn-lg btn-primary     '])!!}</div>
                                                        </div>
                                                        
                                                    </fieldset>
                                                {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="row top-small">
                                    <div class="col-md-6">
                                        <div class="login-panel panel panel-default">
                                            <div class="panel-body well-green">
                                                <div class="row">
                                                    <h3 class="col-md-12 text-center text-white"><b>Registro de Nuevo Usuario</b></h3>
                                                </div>
                                                {!!Form::open(['route' => 'user.store', 'method' => 'POST'])!!}
                                                    <fieldset>
                                                        <div class="form-group">
                                                            {!!Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])!!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])!!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!!Form::password('repassword',['class' => 'form-control', 'placeholder' => 'Repita Contraseña'])!!}
                                                        </div>
                                                        {!!Form::submit('Registrar',['class' => 'btn btn-lg btn-success btn-block'])!!}
                                                    </fieldset>
                                                {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden-sm hidden-xs hidden-xs-ms">
                                        <div class="row">
                                            <div class="well well-green well-lg .text-justify">
                                                <div class="row">
                                                    <div class="col-md-8 text-center"><h3 class="text-white"> ¿Que esperas? Unete! </h3></div>
                                                    <div class="col-md-4 ">
                                                        <span class="pull-right"><i class="text-white fa fa-id-card fa-2x" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                
                                                <p>Se miembro de esta gran comunidad y empieza a ganar con un simple click!</p>
                                                <p>Participa en las rifas y no olvides, comenta y comparte nuestro sitio... Todos merecen tener esta gran oportunidad! </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center small">
                                                <img class="img-responsive img-rounded" src="{{ asset('img/registrar.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
         </div>
    </div>
@stop