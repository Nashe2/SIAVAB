@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Crear nuevo material</h4>
		</header>

		<div class="card-body">
			@include('materiales.form')
		</div>
	</div>
</div>
 @endsection