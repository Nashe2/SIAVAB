{!! Form::open (['url' => '/artesano','class' => 'app.form']) !!}
	<div>
		{!! Form::label('category','Categoría') !!}
		<br>
		{!! Form::text('category','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('discapacidad','Descripción de discapacidad') !!}
		<br>
		{!! Form::textarea('discapacidad','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}