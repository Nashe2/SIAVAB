{!! Form::open (['url' => '/color','class' => 'app.form']) !!}
	<div>
		{!! Form::label('namecolor','RGB') !!}
		<br>
		{!! Form::text('namecolor','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('descriptioncolor','Descripción del color') !!}
		<br>
		{!! Form::textarea('descriptioncolor','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}