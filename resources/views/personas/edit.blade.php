@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar persona</h4>
			<p>{{$persona->nombre}}</p>
		</header>

		<div class="card-body">
			@include('personas.form')
		</div>
	</div>
</div>
 @endsection