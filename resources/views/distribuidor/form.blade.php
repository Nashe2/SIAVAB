{!! Form::open (['url' => '/distribuidor','class' => 'app.form']) !!}
	<div>
		{!! Form::label('giro_emp','Giro empresarial') !!}
		<br>
		{!! Form::text('giro_emp','',['class' => 'form_control']) !!}
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