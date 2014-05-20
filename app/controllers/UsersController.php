<?php

class UsersController extends \BaseController {

	public function index()
	{
		 $users = User::all();

    return View::make('users/index')->withUsers($users);
	}

	public function create()
	{
		// return "display form to create a new user";

		return View::make('users.create');
	}

	// The methods below don't work.
	public function store()
	{
		// return "PUT request to insert a row into the database (new user)";

		// return redirect::route('users.index');

		// return 'Create the new user, given the post data.';

		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('users.index');
	}

	public function show($userId, $questionId)
	{
	   // $user = User::whereUsername($username)->first(); 
	   
	   // return View::make('users.show', ['user' => $user]);

		//$user = $username;
		return 'Display question of id ' . $questionId . ' that is associated with a username of ' . $userId;
	}

	public function edit($username)
	{
		return "user data edited";
	}

	public function update($username)
	{
		return "user data updated";
	}	

	public function destroy($username)
	{
		return "user data destroyed";
	}

}
