@extends('layouts.master')

@section('main-content')
	<h1>Create new user</h1>

{{ Form::open(['route' => 'users.store']) }}

	<div>
		{{ Form::label('username', 'Username: ')}}
		{{ Form::text('username') }}
		{{ $errors->first('username', '<span class=error>:message</span>') }}
	</div>

	<div>
		{{ Form::label('password', 'Password: ')}}
		{{ Form::password('password') }}	
		{{ $errors->first('password') }}
	</div>

	<div>
		{{ Form::submit('Create User') }}
	</div>

{{ Form::close() }}



@stop	
