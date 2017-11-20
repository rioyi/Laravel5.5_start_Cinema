@extends('layouts.admin')

@section('content')
@include('alerts.request')
	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		@include('usuario.forms.usuario')
		{!!Form::submit('registrar',['class'=>'btn btn-primary'])!!}
	{!! Form::close()!!}
@endsection