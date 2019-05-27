@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nuevo distribuidor</h4>
		</header>

		<div class="card-body">
			@include('distribuidor.form')
		</div>
	</div>
</div>
 @endsection