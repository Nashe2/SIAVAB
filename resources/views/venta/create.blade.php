@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nueva venta</h4>
		</header>

		<div class="card-body">
			@include('venta.form')
		</div>
	</div>
</div>
 @endsection