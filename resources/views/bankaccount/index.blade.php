@extends('layouts.cliente')
@section('content')
	<div class="row" style="margin-top:50px;">
	  <h3 class="col-md-12 center" ><b>Cuentas Bancarias</b></h3>
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
	      {!!Html::link('/bankaccount/create', $title = '', $attributes = array('class'=> 'btn btn-success btn-lg glyphicon glyphicon-plus'), $secure = null)!!}
	    </div>
	</div>
	<div class="row " style="margin-top:20px;">
	    <div class="col-md-10 col-md-offset-1 table-responsive col-sm-12 col-xs-12" >
	    	<table id="tabla_vp" class="table table-bordered text-center">
	            <thead>
	            <tr>
	              <th>Nro</th>
	              <th>Titular</th>
	              <th>Email</th>
	              <th>Tipo</th>
	              <th>Banco</th>
	              <th colspan="2">Acciones</th>
	            </tr>
	            </thead>
	            <tbody class="searchable">
	            	@foreach($cuentas as $cuenta)	
						<tr>
							<td>{{ $cuenta->nro }}</td>
							<td>{{ $cuenta->titular }}</td>
							<td>{{ $cuenta->email }}</td>
							<td>{{ $cuenta->tipo }}</td>
							<td>{{ $cuenta->banco }}</td>
							<td>{!!Html::linkRoute('bankaccount.edit',$title = '', $parameters = [$cuenta->id], $attributes = ['class'=> 'glyphicon glyphicon-pencil btn btn-warning'])!!}
							</td>
							<td>
								{!!Form::open(['route' => ['bankaccount.destroy', $cuenta->id], 'method'=>'DELETE'])!!}
									{!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class'=>'btn btn-danger', 'type'=>'submit', 'OnClick'=> 'return confirm("¿Deseas eliminar la cuenta?")')) !!}
									
								{!!Form::close()!!}
							</td>
						</tr>
					@endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
@stop