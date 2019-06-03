@extends('layouts.app');

@section('content')
	<div class="container">
		<div class="">
			<productos-component></productos-component>
		</div>
		<div class="row">
			@foreach ($productos as $producto)
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="card padding">
						<header>
							<h2 class="card-title">
								<a href="/productos/{{$producto->id}}">{{$producto->title}}</a>
							</h2>
							<h4 class="card-subtitle">{{$producto->price}}</h4>
						</header>
						<p class="card-text">{{$producto->description}}</p>
					</div>
				</div>
			@endforeach
		</div>
		<div class="actions text-center">
			{{$productos->links()}}
		</div>
	</div>
 @endsection