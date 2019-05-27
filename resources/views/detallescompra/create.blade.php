@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Detalles de la compra de material</h4>
		</header>

		<div class="card-body">
			@include('detallescompra.form')
		</div>
	</div>
</div>
 @endsection