{!! Form::open (['url' => '/usomaterial','class' => 'app.form']) !!}

	<div>
		{!! Form::label('cantidaduso','Cantidad') !!}
		<br>
		{!! Form::number('cantidaduso','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}