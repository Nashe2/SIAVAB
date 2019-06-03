@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nueva persona</h4>
		</header>

		<div class="card-body">
			@include('personas.form')
		</div>
	</div>
</div>
 @endsection