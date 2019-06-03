{!! Form::open (['url' => '/produccion','class' => 'app.form']) !!}

	<div>
		{!! Form::label('precio_fab','Precio de fabricación') !!}
	<br>
		{!! Form::number('precio_fab','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('fecha_ini','Fecha de inicio de creacion') !!}
	<br>
		{!! Form::date('fecha_ini','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('fecha_ter','Fecha de termino producción') !!}
	<br>
		{!! Form::date('fecha_ter','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}