@auth
	{!! Form::open (['method' => 'DELETE', 'route' => ['productos.destroy', $producto->id], 'onsubmit' => 'return confirm("¿Estás seguro de eliminar este producto?")']) !!}
	
		<input type="submit" class="btn btn-danger" value="Eliminar producto">

	{!!Form::close ()!!}
@endauth

