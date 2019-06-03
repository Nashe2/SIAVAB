{!! Form::open (['url' => '/hilo','class' => 'app.form']) !!}
	<div>
		{!! Form::label('tipo','Tipo') !!}
		<br>
		{!! Form::text('tipo','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}