@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar Material</h4>
			<p>{{$material->nombre}}</p>
		</header>

		<div class="card-body">
			@include('materiales.form')
		</div>
	</div>
	<p>modificar</p>
</div>