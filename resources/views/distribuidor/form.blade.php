{!! Form::open (['url' => '/distribuidor','class' => 'app.form']) !!}
	<div>
		{!! Form::label('giro','Giro empresarial') !!}
		<br>
		{!! Form::text('giro','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}