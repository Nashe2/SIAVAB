{!! Form::open (['url' => '/distribuidor','class' => 'app.form']) !!}
	<div>
		{!! Form::label('giro_emp','Giro empresarial') !!}
		<br>
		{!! Form::text('giro_emp','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}