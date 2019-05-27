@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Asignación de material para creacion de producto</h4>
		</header>

		<div class="card-body">
			@include('creacionmaterial.form')
		</div>
	</div>
</div>
 @endsection