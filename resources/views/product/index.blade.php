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
	      		{!!Html::link('/product/create', $title = '', $attributes = array('class'=> 'btn btn-success btn-lg glyphicon glyphicon-plus'), $secure = null)!!}
	    </div>
	</div>		
		<div class="row " style="margin-top:20px;">
	    	<div class="col-md-10 col-md-offset-1 table-responsive col-sm-12 col-xs-12" >	
				<table id="tabla_vp" class="table table-bordered text-center">
					<thead>
						<th>Imagen</th>
						<th>Serie</th>
						<th>Nombre</th>
						<th>Monto</th>
						<th>Fecha</th>
						<th>Loteria</th>
						<th colspan="3">Acciones</th>
					</thead>
					<tbody class="searchable">
						@foreach($products as $product)
							<tr>
								<td> <img src = "{{ asset('products/'.$product->imagen) }}" class="img-responsive" style='max-width: 80px'/></td>
								<td> {{$product->serie}} </td>
								<td> {{$product->name}} </td>
								<td> {{$product->monto}} </td>
								<td> {{$product->fecha}} </td>
								<td> {{$product->loteria}} </td>
								<td>
									{!!Html::linkRoute('product.edit',$title = '', $parameters = [$product->id], $attributes = ['class'=> 'glyphicon glyphicon-pencil btn btn-warning'])!!}
								</td>
								<td>
									{!!Form::open(['route' => ['product.destroy', $product->id], 'method'=>'DELETE'])!!}
									{!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class'=>'btn btn-danger', 'type'=>'submit', 'OnClick'=> 'return confirm("¿Deseas eliminar la rifa?")')) !!}
									
									{!!Form::close()!!}
							</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			{!! $products->render()!!}
			</div>
		</div>

@stop