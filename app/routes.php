<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

//Route::get('/', 'PagesController@home');
//
//Route::get('/about', 'PagesController@about');
//
//Route::get('/users', function() {
//    $users = User::all(); // select * from users
//});

//Route::get('/', function()
//{
//    $name = 'Mr. James Hong';
//    
//	return View::make('hello')->with('name', $name);
//});

//Route::get('users', function()
//{
//    return View::make('users');
//});

// Route::get('/', function() {
    
    // fetch all with where clause
//    $users = DB::table('users')->where('username', '!=', 'james')->get();    
//    dd($users);
//  return $users;
    // die(var_dump($user));
    
//$users = DB::table('users')->get();    
//     return $users;
    
    // fetch all
    //$users = User::all(); // select * from users;
    
    //return $users;
    
    
    
   // fetch
//    $users = User::find(1);
//    
//    return $users;
   
    // new row as object
//    $user = new User;
//    $user->username = 'NewUser';
//    $user->password = Hash::make('password');
//    $user->save(); //save to database
//    return User::all();
    
    // create
//    User::create([
//       'username' => 'AnotherUser',
//        'password' => Hash::make('1234')
//    ]);
//    
//    return User::all();    
    
    // update
//    $user = User::find(5);
//    $user->username = 'UpdatedName';
//    $user->save();
//    
//    return User::all();


    // delete single row
//    $user = User::find(13);
//    $user->delete();
//      return User::all();
    
    // return a subset, order by
  //  return User::orderBy('username', 'asc')->take(2)->get();
// });

// Route::get('users', function()
// {

//   $users = User::all();

//   // return View::make('users/index')->with('users', $users);

//     return View::make('users/index')->withUsers($users);

//  // return View::make('users/index', ['users' => $users]);
   
//   // return View::make('index');
// });

// Route::get('users/{username}', function($username)
// {
//    $user = User::whereUsername($username)->first(); // select  * from users where user=USERNAME limit 1
   
//    return View::make('users.show', ['user' => $user]);
// });

// // Route::get('/greet/casual', function()
// // {
// //     return 'hey, whats up?';
// // });

// Route::get('/', function()
// {
//     $name = 'Jim';
//     return View::make('hello')->with('name', $name);
    
// });

// Route::get('users', 'UsersController@index');

// Route::get('users/{username}','UsersController@show');

// {

  // $users = User::all();

  // return View::make('users/index')->with('users', $users);

    // return View::make('users/index')->withUsers($users);

 // return View::make('users/index', ['users' => $users]);
   
  // return View::make('index');
// });

// Route::get('users/{username}', function($username)
// {
//    $user = User::whereUsername($username)->first(); // select  * from users where user=USERNAME limit 1
   
//    return View::make('users.show', ['user' => $user]);
// });

// Route::get('/greet/casual', function()
// {
//     return 'hey, whats up?';
// });

// Route::get('/', function()
// {
//     $name = 'Jim';
//     return View::make('hello')->with('name', $name);
    
// });


// Resoureful routing
  Route::resource('users', 'UsersController');

  Route::resource('users.questions', 'UsersController');