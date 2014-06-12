@extends('layouts.master')

@section('main-content')
        <h1>All Books </h1>  
             
        <!-- @if ($users->count())
        
            @foreach ($users as $user)
            
                <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
                <!-- <li> $user->username }}</li>      - ->
            
        
        @endforeach
        

        @else
        {
        <p> "Unfortunately, there are no users." </p>
    
    @endif -->
        <!-- dd($users->toArray())  -->
@stop        