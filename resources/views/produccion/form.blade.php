{!! Form::open (['url' => '/produccion','class' => 'app.form']) !!}

	<div>
		{!! Form::label('datecrea','Fecha de creacion') !!}
	<br>
		{!! Form::text('datecrea','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('pricefab','Precio de fabricación') !!}
	<br>
		{!! Form::number('pricefab','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('timecrea','Tiempo de producción') !!}
	<br>
		{!! Form::number('timecrea','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}