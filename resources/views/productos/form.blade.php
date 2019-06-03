{!! Form::open (['route' => [$producto->url(),$producto->id], 'method' => $producto->method(),'class' => 'app.form']) !!}
	
	<div>
		{!! Form::label('title','Título del producto') !!}
		<br>
		{!! Form::text('title',$producto->title,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('description','Descripción del producto') !!}
		<br>
		{!! Form::textarea('description',$producto->description,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('price','Precio del producto') !!}
		<br>
		{!! Form::number('price',$producto->price,['class' => 'form_control']) !!}
	</div>
	<br>

	<div>
		{!! Form::label('cantidad','Cantidad') !!}
		<br>
		{!! Form::number('cantidad',$producto->cantidad,['class' => 'form_control']) !!}
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}