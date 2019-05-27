{!! Form::open (['url' => '/promocion','class' => 'app.form']) !!}

	<div>
		{!! Form::label('titleprom','Título de la promoción') !!}
		<br>
		{!! Form::text('titleprom','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('description','Descripción') !!}
		<br>
		{!! Form::textarea('description','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('dateprom','Fecha de inicio') !!}
	<br>
		{!! Form::text('dateprom','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('dateprom','Fecha de termino') !!}
	<br>
		{!! Form::text('dateprom','',['class' => 'form_control']) !!}
	</div>
	<br>


	<div>
		{!! Form::label('descto','Porcentaje de descuento') !!}
	<br>
		{!! Form::text('descto','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}