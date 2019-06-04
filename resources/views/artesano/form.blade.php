{!! Form::open (['url' => '/artesano','class' => 'app.form']) !!}
	<div>
		{!! Form::label('categoria','Categoría') !!}
		<br>
		{!! Form::text('categoria','',['class' => 'form_control']) !!}
		<br>
		{!! Form::label('discapacidad','Tiene alguna discapacidad') !!}
		<br>
		{!! Form::text('discapacidad','',['class' => 'form_control']) !!}
		<br>
		{!! Form::label('persona','Escoge la persona') !!}
		<select class="form-control" name="persona" required id="persona">
			<option selected disabled>Elegir persona</option>
            @foreach($personas as $persona)
            <option value="{{$persona->id}}">{{$persona->nombre}}</option>
            @endforeach
        </select>
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}