@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card-padding">
		<header>
			<h2>Mi carrito de compras</h2>
		</header>
		<div class="card-body">
			@foreach ($shopping_cart->productos as $producto)
			<div class="">
				<h4>{{$producto->title}}</h4>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection