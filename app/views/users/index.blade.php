@extends('layouts.master')

@section('main-content')
        <h1>All Registered Library Members</h1>  
             
        @if ($users->count())
        
            <p>
            @foreach ($users as $user)
            
                <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
                <!-- <li> $user->username }}</li>      -->
            
        
            @endforeach
            </p>

        @else
        {
        <p> "Unfortunately, there are no users." </p>
    
    @endif
        <!-- dd($users->toArray())  -->
@stop        