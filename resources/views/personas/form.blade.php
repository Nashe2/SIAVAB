{!! Form::open (['url' => '/personas','class' => 'app.form']) !!}
	<div>
		{!! Form::label('nombre','Nombre de la persona') !!}
		<br>
		{!! Form::text('nombre','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('paterno','Apellido paterno') !!}
		<br>
		{!! Form::text('paterno','',['class' => 'form_control']) !!}
	</div>
	<br>

		<div>
		{!! Form::label('materno','Apellido materno') !!}
		<br>
		{!! Form::text('materno','',['class' => 'form_control']) !!}
	</div>
	<br>

		<div>
		{!! Form::label('nacimiento','Fecha de nacimiento') !!}
		<br>
		{!! Form::date('nacimiento','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('telefono','Teléfono') !!}
		<br>
		{!! Form::text('telefono','0',['class' => 'form_control']) !!}
	</div>
	<br>
	
	<div>
		{!! Form::label('rfc','RFC') !!}
		<br>
		{!! Form::text('rfc','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('sexo','Sexo') !!}
		<br>
		{!! Form::text('sexo','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}