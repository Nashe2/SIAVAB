@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar distribuidor</h4>
			<p>{{$distribuidor->giro_emp}}</p>
		</header>

		<div class="card-body">
			@include('distribuidor.form')
		</div>
	</div>
	<p>modificar</p>
</div>