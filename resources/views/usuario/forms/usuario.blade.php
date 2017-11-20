

<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('E-mail:')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu Email'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Password')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu Contraseña'])!!}
		</div>