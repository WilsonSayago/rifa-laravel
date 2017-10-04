            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center form-group">
                    {!!Form::label('titulo', 'Titulo')!!}
                    {!!Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Titulo de la noticia', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center form-group">
                    {!!Form::label('contenido', 'Contenido')!!}
                    {!!Form::textarea('contenido', null, ['class' => 'form-control', 'placeholder' => 'Contenido de la noticia', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center form-group">
                	{!!Form::label('fecha', 'Fecha')!!}
                    {!!Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center form-group">
                	{!!Form::label('imagen', 'Imagen')!!}
                    {!!Form::file('imagen', null, ['class' => 'form-control'])!!}
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4 text-center col-md-offset-2 form-group">
                    {!!Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                	<a href="{{route('product.index')}}" class='btn btn-warning'>Atras</a>
                </div>
            </div>