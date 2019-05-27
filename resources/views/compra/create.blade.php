@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Compra de material con distribuidor</h4>
		</header>

		<div class="card-body">
			@include('compra.form')
		</div>
	</div>
</div>
 @endsection