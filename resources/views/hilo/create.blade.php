@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nuevo hilo</h4>
		</header>

		<div class="card-body">
			@include('hilo.form')
		</div>
	</div>
</div>
 @endsection