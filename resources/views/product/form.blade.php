            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                    {!!Form::label('name', 'Nombre')!!}
                    {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                	{!!Form::label('monto', 'Monto')!!}
                    {!!Form::number('monto', null, ['class' => 'form-control', 'placeholder' => '1000.00', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                	{!!Form::label('fecha', 'Fecha')!!}
                    {!!Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                	{!!Form::label('serie', 'Serie')!!}
                    {!!Form::number('serie', null, ['class' => 'form-control', 'placeholder' => '84525', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                	{!!Form::label('imagen', 'Imagen')!!}
                    {!!Form::file('imagen', null, ['class' => 'form-control'])!!}
                </div>
            </div>
            <div class="row">    
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                	{!!Form::label('loteria', 'Loteria')!!}
                    {!!Form::select('loteria', ['Chance A' => 'Chance A', 'Chance B' => 'Chance B'], ['class' => 'form-control', 'placeholder' => 'Loteria', 'required'])!!}
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4 text-center col-md-offset-4 form-group">
                    {!!Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                	<a href="{{route('product.index')}}" class='btn btn-warning'>Atras</a>
                </div>
            </div>