@extends('layouts.master')

@section('head')
    <title>Search Results | Centre Street Library &#45; Handen &#44; Ontario</title>
    <meta name="description" content="Search results for Centre Street Library website, located in Handen, Ontario.">

    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
@stop

@section('main-content')
	<h1>Hello, {{ $user->username }}</h1>

	<h2>You are a registered library member of Centre St. Library.</h2>

	<p>
		<li>{{ link_to("/users", 'Back to all registered library members list') }}</li>
	</p>
@stop	
