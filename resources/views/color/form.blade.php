{!! Form::open (['url' => '/color','class' => 'app.form']) !!}
	<div>
		{!! Form::label('rgb','RGB') !!}
		<br>
		{!! Form::text('rgb','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('descripcion','Descripción del color') !!}
		<br>
		{!! Form::textarea('descripcion','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}