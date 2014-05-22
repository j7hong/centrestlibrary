<html>
<head>
	<title>Login</title>
</head>
<body>
	<div>
		{{ Form::open(['route' => 'sessions.store']) }}

		{{ Form::label('username', 'Username:') }}
		
		{{ Form::text('username') }}
	</div>
	
	<div>		
		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password') }}
	</div>

	<div>
		{{ Form::submit('Login') }}
	</div>

	{{ Form::close() }}
</body>
</html>