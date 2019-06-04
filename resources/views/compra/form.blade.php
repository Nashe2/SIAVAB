{!! Form::open (['url' => '/compra','class' => 'app.form']) !!}

	<div>
		{!! Form::label('fecha','Fecha de compra') !!}
		<br>
		{!! Form::date('fecha','',['class' => 'form_control']) !!}
		<br>
		{!! Form::label('distribuidor','Escoge el giro empresarial del distribuidor') !!}
		<select class="form-control" name="distribuidor" required id="distribuidor">
			<option selected disabled>Elegir el giro empresarial</option>
            @foreach($distribuidors as $distribuidor)
            <option value="{{$distribuidor->distribuidor_id}}">{{$distribuidor->giro_emp}}</option>
            @endforeach
        </select>
	</div>
	<br>

	<div class="">
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<br>

{!! Form::close () !!}