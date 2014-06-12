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

Route::get('/index', 'PagesController@index', function()
{
  return View::make('index');
});

Route::get('/about', 'PagesController@about', function()
{
  return View::make('about');
});

// = = = SESSIONS CONTROLLER (LOGIN) = = = 
  // Route::resource('sessions', 'SessionsController');

  // Route::get('/login', 'SessionsController@create');

  // Route::get('/logout', 'SessionsController@destroy');

  // Route::get('/admin', function()
  // {
  //   return 'Admin page';
  // })->before('auth');


// = = = HOME CONTROLLER = = = 
  // Route::get('/books', function() {
  //   $books = DB::table('books')->get();

  //   return $books;
  // });

  // Route::resource('index', 'HomeController');

// = = = BOOKS CONTROLLER = = = 

  // Route::resource('books', 'BooksController');

// Route::get('/all-users', function() {
//    $users = User::all(); // select * from users
// });

// Route::get('/', function()
// {
//    $name = 'Mr. James Hong';
   
// 	return View::make('hello')->with('name', $name);
// });

Route::get('/books', 'PagesController@allBooks', function(){

  // return View::make('books');
  $books = DB::table('books')->get();

    return $books;

});

Route::get('/test2', function()
{
   // return View::make('test1');

  $books = DB::table('books')->get();

    return $books;
});

Route::get('/users-not-james', function() {
    
    // fetch all with where clause
   $users = DB::table('users')->where('username', '=', 'james')->get();    
//    dd($users);
 return $users;
    // die(var_dump($user));
});

// not working
Route::get('/get-all-records', function() {

  $users = DB::table('users')->get();    
    return $users;
    
    // fetch all
    // (similar to line 45)
    // $users = User::all(); // select * from users;
    
    // return $users;
});  

    
    
Route::get('/single-record', function() {
  // fetch
   $users = User::find(1);
   
   return $users;
}); 
   
   
Route::get('/record-as-obj', function() {
  // new row as object
   $user = new User;
   $user->username = 'NewUserA';
   $user->password = Hash::make('password');
   $user->save(); //save to database
   return User::all();
});
    
    
Route::get('/create-record', function() {
  // create
   User::create([
      'username' => 'AnotherUser',
       'password' => Hash::make('1234')
   ]);
   
   return User::all(); 
});
       
    
Route::get('/update-record', function() {
  // update
   $user = User::find(15);
   $user->username = 'NewName';
   $user->save();
   
   return User::all();
});
    

Route::get('/delete-record', function() {
// delete single row
   $user = User::find(15);
   $user->delete();
     return User::all();
});
    

Route::get('/return-subset-orderby', function() {
// return a subset, order by
   return User::orderBy('username', 'asc')->take(2)->get();
});    
    

Route::get('users', function()
{

  $users = User::all();

  // return View::make('users/index')->with('users', $users);

    return View::make('users/index')->withUsers($users); 

//  // return View::make('users/index', ['users' => $users]);
   
//   // return View::make('index');
});

Route::get('users/{username}', function($username)
{
   $user = User::whereUsername($username)->first(); // select  * from users where user=USERNAME limit 1
   
   return View::make('users/show', ['user' => $user]);
});

Route::get('/greet/casual', function()
{
    return 'hey, whats up?';
});

// Route::get('/', function()
// {
//     $name = 'Jim';
//     return View::make('hello')->with('name', $name);
    
// });

// Route::get('users', 'UsersController@index');

// Route::get('users/{username}','UsersController@show', function()
// {

  // $users = User::all();

  // return View::make('users/index')->with('users', $users);

    // return View::make('users/index')->withUsers($users);

 // return View::make('users/index', ['users' => $users]);
   
  // return View::make('index');
// });

// Resoureful routing
  Route::resource('users', 'UsersController');

  Route::resource('users.questions', 'UsersController');

  Route::get('/new-user/jack', function()
  {
    User::create([

        'username' => 'jack',
        'email' => 'jack@bean.com',
        'password' => Hash::make('beanstalk')

    ]);

    return 'Done';

  });



