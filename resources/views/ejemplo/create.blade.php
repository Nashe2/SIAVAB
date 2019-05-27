@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>ejemplo de formulario</h4>
		</header>

		<div class="cadr-body">
		@include('ejemplo.form')
		</div>
	</div>
</div>
 @endsection