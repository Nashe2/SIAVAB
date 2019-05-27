{!! Form::open (['url' => '/detallescompra','class' => 'app.form']) !!}

	<div>
		{!! Form::label('cantidad','Cantidad') !!}
		<br>
		{!! Form::number('cantidad','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}