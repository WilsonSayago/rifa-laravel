<div class="row">
    <div class="col-md-6 col-md-offset-2 text-center form-group">
        {!!Form::text('titular', null, ['class' => 'form-control', 'placeholder' => 'Titular'])!!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-2 text-center form-group">
        {!!Form::select('banco', ['Banesco' => 'Banesco', 'Provincial' => 'Provincial','Mercantil' =>'Mercantil','Bicentenario' => 'Bicentenario', 'Venezuela'=>'Venezuela'],null, ['class' => 'form-control', 'placeholder' => 'Banco'] )!!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-2 text-center form-group">
        {!!Form::select('tipo', ['Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'],null, ['class' => 'form-control', 'placeholder' => 'Tipo'] )!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-2 text-center form-group">
        {!!Form::text('nro', null, ['class' => 'form-control', 'placeholder' => 'Nro. de Cuenta'])!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-2 text-center form-group">
        {!!Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico'])!!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 text-center col-md-offset-3 form-group">
        {!!Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block'])!!}
    </div>
</div>