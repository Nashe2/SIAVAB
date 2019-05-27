{!! Form::open (['url' => '/productos','class' => 'app.form']) !!}
	
	<div>
		{!! Form::label('title','Título del producto') !!}
		<br>
		{!! Form::text('title','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('description','Descripción del producto') !!}
		<br>
		{!! Form::textarea('description','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('price','Precio del producto') !!}
		<br>
		{!! Form::number('price','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('cantidad','Cantidad') !!}
		<br>
		{!! Form::number('cantidad','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}