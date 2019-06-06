{!! Form::open (['route' => [$material->url(),$material->id], 'method' => $material->method(),'class' => 'app.form']) !!}
	<div>
		{!! Form::label('nombre','Nombre del material') !!}
		<br>
		{!! Form::text('nombre',$material->nombre,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('descripcion','Descripción del material') !!}
		<br>
		{!! Form::textarea('descripcion',$material->descripcion,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('cantidad','Cantidad') !!}
		<br>
		{!! Form::number('cantidad',$material->cantidad,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('precio_unitario','Precio unitario') !!}
		<br>
		{!! Form::number('precio_unitario',$material->precio_unitario,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('es_hilo','Es hilo') !!}
		<br>
		{!! Form::text('es_hilo',$material->es_hilo,['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}