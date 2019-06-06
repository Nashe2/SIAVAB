{!! Form::open (['route' => [$persona->url(),$persona->id], 'method' => $persona->method(),'class' => 'app.form']) !!}
	<div>
		{!! Form::label('nombre','Nombre de la persona') !!}
		<br>
		{!! Form::text('nombre',$persona->nombre,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('paterno','Apellido paterno') !!}
		<br>
		{!! Form::text('paterno',$persona->paterno,['class' => 'form_control']) !!}
	</div>
	<br>

		<div>
		{!! Form::label('materno','Apellido materno') !!}
		<br>
		{!! Form::text('materno',$persona->materno,['class' => 'form_control']) !!}
	</div>
	<br>

		<div>
		{!! Form::label('nacimiento','Fecha de nacimiento') !!}
		<br>
		{!! Form::date('nacimiento',$persona->nacimiento,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('telefono','Teléfono') !!}
		<br>
		{!! Form::text('telefono',$persona->telefono,['class' => 'form_control']) !!}
	</div>
	<br>
	
	<div>
		{!! Form::label('rfc','RFC') !!}
		<br>
		{!! Form::text('rfc',$persona->rfc,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('sexo','Sexo') !!}
		<br>
		{!! Form::text('sexo',$persona->sexo,['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}