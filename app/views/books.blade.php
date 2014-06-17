@extends('layouts.master')

@section('main-content')
    <h1>All Books</h1>

		               
        @foreach ($books as $book)
        	<p>
                <li>{{ HTML::link("/books/{$book->ISBN}", $book->Title) }}</li>
                <!-- <li> $user->username }}</li>      -->
            </p>	
        
        @endforeach
    
   
@stop

