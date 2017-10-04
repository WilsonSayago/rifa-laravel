@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px;">
		<h3 class="col-md-12 center" ><b>Rifas</b></h3>
	</div>
	<div class="row top-small">
		@include('alerts.request')
		@include('alerts.success')
		@include('alerts.errors')
    </div>
	<div class="row" style="margin-top:50px">
	    <div class="form-group col-md-6 col-md-offset-1 col-sm-6 col-xs-6">
		    {!!Form::label('filter', 'Buscador', ['class' => 'control-label']) !!}
		    {!! Form::text('filter',null, ['class' => 'form-control ']) !!}
	    </div>
	    <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-6">
	      		{!!Html::link('/notice/create', $title = '', $attributes = array('class'=> 'btn btn-success btn-lg glyphicon glyphicon-plus'), $secure = null)!!}
	    </div>
	</div>		
		<div class="row " style="margin-top:20px;">
	    	<div class="col-md-10 col-md-offset-1 table-responsive col-sm-12 col-xs-12" >	
				<table id="tabla_p" class="table table-bordered text-center">
					<thead>
						<th>Imagen</th>
						<th>Titulo</th>
						<th>Contenido</th>
						<th>Fecha</th>
						<th colspan="2">Acciones</th>
					</thead>
					<tbody>
						@foreach($notices as $notice)
							<tr>
								<td> <img src = "{{ asset('notices/'.$notice->imagen) }}" class="img-responsive" style='max-width: 80px'/></td>
								<td> {{$notice->titulo}} </td>
								<td> {{$notice->contenido}} </td>
								<td> {{$notice->fecha}} </td>
								<td>
									{!!Html::linkRoute('notice.edit',$title = '', $parameters = [$notice->id], $attributes = ['class'=> 'glyphicon glyphicon-pencil btn btn-warning'])!!}
								</td>
								<td>
									{!!Form::open(['route' => ['notice.destroy', $notice->id], 'method'=>'DELETE'])!!}
									{!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class'=>'btn btn-danger', 'type'=>'submit', 'OnClick'=> 'return confirm("¿Deseas eliminar la noticia?")')) !!}
									
									{!!Form::close()!!}
							</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			{!! $notices->render()!!}
			</div>
		</div>

@stop