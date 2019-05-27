@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>En produccion por artesano</h4>
		</header>

		<div class="card-body">
			@include('produccion.form')
		</div>
	</div>
</div>
 @endsection