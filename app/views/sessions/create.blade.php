<html>
<head>
	<title>Login</title>
</head>
<body>
	<div>
		<h1>Centre Street Library</h1>

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

	<p>
		{{ link_to("/users", 'See all registered library members') }}
	</p>

</body>
</html>