@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Editar color</h4>
			<p>{{$color->rgb}}</p>
		</header>

		<div class="card-body">
			@include('color.form')
		</div>
	</div>
</div>
 @endsection