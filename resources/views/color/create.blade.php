@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nuevo color</h4>
		</header>

		<div class="card-body">
			@include('color.form')
		</div>
	</div>
</div>
 @endsection