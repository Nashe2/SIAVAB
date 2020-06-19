@extends('layouts.app');

@section('content')
<div class="row justify-content-sm-center">
	<div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
		<div class="card">
			<header class="padding text-center bg-primary">
				
			</header>
			<div class="card-body padding">
				<h1 class="card-title">{{$producto->title}}</h1>
				<h4 class="card-subtitle">{{$producto->price}}</h4>
				<p class="card-text">{{$producto->description}}</p>
				<div class="card-actions">
					<add-producto-btn :producto='{{!! json_encode($producto) !!}}'></add-producto-btn>
					<!--Se borro en el video agregar al carrito con ajax y vue-->
					{!! Form::open(['method' => 'POST', 'url' => '/in_shopping_carts']) !!}
					<input type="hidden" name="producto_id" value="{{$producto->id}}">
					<input type="submit" class="btn btn-success" value="Agregar al carrito">
					{!! Form::close() !!}
				

					<!--button type="button" name="button"class="btn btn-success">Agregar al carrito</button!-->
					@include('productos.delete')
				</div>
			</div>
		</div>
	</div>
</div>
 @endsection