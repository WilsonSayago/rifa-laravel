            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                    {!!Form::label('texto', 'Texto')!!}
                    {!!Form::text('texto', null, ['class' => 'form-control', 'placeholder' => 'introduzca el texto que se visualizara', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center form-group">
                	{!!Form::label('imagen', 'Imagen')!!}
                    {!!Form::file('imagen', null, ['class' => 'form-control'])!!}
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4 text-center col-md-offset-4 form-group">
                    {!!Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                	<a href="{{route('product.index')}}" class='btn btn-warning'>Atras</a>
                </div>
            </div>