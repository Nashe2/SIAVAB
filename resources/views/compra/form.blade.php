{!! Form::open (['url' => '/compra','class' => 'app.form']) !!}

	<div>
		{!! Form::label('fecha','Fecha de compra') !!}
	<br>
		{!! Form::date('fecha','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}