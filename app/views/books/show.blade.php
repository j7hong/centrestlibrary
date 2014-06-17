@extends('layouts.master')

@section('head')
    <title>A book | Centre Street Library &#45; Handen &#44; Ontario</title>
    <meta name="description" content="A book at Centre Street Library website, located in Handen, Ontario.">

    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
@stop

@section('main-content')
	<h1>You are viewing: a book</h1>

	<p>
		<li>{{ link_to("/books", 'Back to all books list') }}</li>
	</p>
@stop	
