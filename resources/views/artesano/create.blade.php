@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nuevo artesano</h4>
		</header>

		<div class="card-body">
			@include('artesano.form')
		</div>
	</div>
</div>
 @endsection