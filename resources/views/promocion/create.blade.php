@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Nueva promoción</h4>
		</header>

		<div class="card-body">
			@include('promocion.form')
		</div>
	</div>
</div>
 @endsection