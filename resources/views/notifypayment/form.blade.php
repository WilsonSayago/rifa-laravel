<div class="row">
    <div class="col-md-6 col-md-offset-3 text-center form-group">
        {!!Form::number('nro_referencia', null, ['class' => 'form-control', 'placeholder' => 'Numero de Referencia'])!!}
    </div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-3 text-center form-group">
        {!!Form::number('monto', null, ['class' => 'form-control', 'placeholder' => 'Monto de la transferencia'])!!}
    </div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-3 text-center form-group">
        {!!Form::number('ci', null, ['class' => 'form-control', 'placeholder' => 'Cedula del titular de la transferencia'])!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3 text-center form-group">
        {!!Form::select('banco', ['Banesco' => 'Banesco', 'Provincial' => 'Provincial','Mercantil' =>'Mercantil','Bicentenario' => 'Bicentenario', 'Venezuela'=>'Venezuela'],null, ['class' => 'form-control', 'placeholder' => 'Banco'] )!!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 text-center col-md-offset-3 form-group">
        {!!Form::submit('Procesar',['class' => 'btn btn-primary btn-lg btn-block'])!!}
    </div>
</div>