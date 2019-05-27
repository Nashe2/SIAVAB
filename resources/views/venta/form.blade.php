{!! Form::open (['url' => '/venta','class' => 'app.form']) !!}

	<div>
		{!! Form::label('dateventa','Fecha de venta') !!}
		<br>
		{!! Form::number('dateventa','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}