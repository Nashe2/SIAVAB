{!! Form::open (['url' => '/materiales','class' => 'app.form']) !!}
	<div>
		{!! Form::label('nombre','Nombre del material') !!}
		<br>
		{!! Form::text('nombre','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('descripcion','Descripción del material') !!}
		<br>
		{!! Form::textarea('descripcion','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('cantidad','Cantidad') !!}
		<br>
		{!! Form::number('cantidad','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('precio_unitario','Precio unitario') !!}
		<br>
		{!! Form::number('precio_unitario','0',['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('es_hilo','Es hilo') !!}
		<br>
		{!! Form::text('es_hilo','',['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}