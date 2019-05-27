{!! Form::open (['url' => '/carrito','class' => 'app.form']) !!}

	<div>
		{!! Form::label('cantidadproduc','Cantidad') !!}
	<br>
		{!! Form::number('cantidadproduc','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('pricetotal','Precio total') !!}
	<br>
		{!! Form::number('pricetotal','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}