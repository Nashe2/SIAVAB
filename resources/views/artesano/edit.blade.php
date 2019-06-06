@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar artesano</h4>
			<p>{{$artesano->categoria}}</p>
		</header>

		<div class="card-body">
			@include('artesano.form')
		</div>
	</div>
</div>
 @endsection