{!! Form::open (['url' => '/usuarios','class' => 'app.form']) !!}
	<div>
		{!! Form::label('nameuser','Nombre de usuario') !!}
		<br>
		{!! Form::text('nameuser','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('datecrea','Fecha de creación') !!}
		<br>
		{!! Form::number('datecrea','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('password','Contraseña') !!}
		<br>
		{!! Form::text('password','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('passwordconf','Confirmación de contraseña') !!}
		<br>
		{!! Form::number('passwordconf','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}