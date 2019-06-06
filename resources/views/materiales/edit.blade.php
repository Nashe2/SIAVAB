@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar material</h4>
			<p>{{$material->nombre}}</p>
		</header>

		<div class="card-body">
			@include('materiales.form')
		</div>
	</div>
</div>
 @endsection