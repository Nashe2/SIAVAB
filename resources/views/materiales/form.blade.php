{!! Form::open (['url' => '/materiales','class' => 'app.form']) !!}
	<div>
		{!! Form::label('namemate','Nombre del material') !!}
		<br>
		{!! Form::text('namemate','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('descriptionmate','Descripción del material') !!}
		<br>
		{!! Form::textarea('descriptionmate','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('cantidadmate','Cantidad') !!}
		<br>
		{!! Form::number('cantidadmate','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('pricemate','Precio unitario') !!}
		<br>
		{!! Form::number('pricemate','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('eshilo','Es hilo') !!}
		<br>
		{!! Form::text('eshilo','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}