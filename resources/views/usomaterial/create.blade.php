@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Uso del material asignado</h4>
		</header>

		<div class="card-body">
			@include('usomaterial.form')
		</div>
	</div>
</div>
 @endsection