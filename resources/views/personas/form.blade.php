{!! Form::open (['url' => '/personas','class' => 'app.form']) !!}
	<div>
		{!! Form::label('name','Nombre de la persona') !!}
		<br>
		{!! Form::text('name','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('lastname','Apellido paterno') !!}
		<br>
		{!! Form::text('lastname','',['class' => 'form_control']) !!}
	</div>
	<br>

		<div>
		{!! Form::label('lastnames','Apellido materno') !!}
		<br>
		{!! Form::text('lastnames','',['class' => 'form_control']) !!}
	</div>
	<br>

		<div>
		{!! Form::label('birthday','Fecha de nacimiento') !!}
		<br>
		{!! Form::number('birthday','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('rfc','RFC') !!}
		<br>
		{!! Form::text('rfc','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('phone','Teléfono') !!}
		<br>
		{!! Form::number('phone','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('sex','Sexo') !!}
		<br>
		{!! Form::text('sex','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}