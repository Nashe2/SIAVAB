@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Productos en el carrito</h4>
		</header>

		<div class="card-body">
			@include('carrito.form')
		</div>
	</div>
</div>
 @endsection