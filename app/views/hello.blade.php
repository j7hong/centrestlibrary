@extends ('layout')

@section('head')
	<title>First page</title>
@stop

@section('content')
	<div class="welcome">	
		<h1>This is my first project using laravel. Hello {{ $name; }}</h1>
	</div>
@stop	





