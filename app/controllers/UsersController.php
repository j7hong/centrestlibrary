<?php

class UsersController extends \BaseController {
	
	protected $user;

	public function __construct(User $user)
	{
	   $this->user = $user;
	}

	public function index()
	{
		//  $users = User::all();

		$users = $this->user->all();

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

		// $validation = Validator::make(Input::all(), ['username' => 'required', 'password' => 'required']);

	//	if (! User::isValid($input = Input::all()))


	$input = Input::all();

	// $this->user->fill(Input::all());

	// return $this->user->toArray();

	if (! $this->user->fill($input)->isValid())

	// if (! $this->user->isValid($input = Input::all()))

		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		// $this->user->create($input);

		$this->user->save();

		// $validation = Validator::make(Input::all(), User::$rules);

		// if ($validation->fails())
		// 	{
				// return 'failed validation'
				// return Redirect::back()->withInput()->withErrors($validation->messages());
			// }
;
		// $user = new User;
		// $user->username = Input::get('username');
		// $user->password = Hash::make(Input::get('password'));
		// $user->save();

		return Redirect::route('users.index');
	}

	public function show($username)
	{
	   // $user = User::whereUsername($username)->first(); 
	   
	   // return View::make('users.show', ['user' => $user]);

		//$user = $username;
		return 'Display question of id ' . $questionId . ' that is associated with a username of ' . $userId;

		$user = $this->user->whereUsername($username)->first(); 

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

;


