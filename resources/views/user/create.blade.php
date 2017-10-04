@extends('layouts.principal')
@section('content')

    <div class="container">
        
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="featurette-heading">Registro de un nuevo usuario</h3>
            </div>
        </div>
        <div class="row">
            @include('alerts.request')
            @include('alerts.errors')
        </div>
        {!!Form::open(['route' => 'user.store', 'method' => 'POST'])!!}
            @include('user.form')
        {!!Form::close()!!}
        <hr class="featurette-divider">
    </div>
@stop