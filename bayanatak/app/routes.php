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
// route to show the login form
// Route::get('/Users/activate/{code}',array(
// 	'as'=>'Users-activate',
//      'uses'=> 'UsersController@getActivate'
// 	));
Route::get('/Users/activate/{code}', function($code)
{

	$User = User::where('code', '=', $code)->first();
	$User->active='1';
	$User->code='';
	$User->save();
	return View::make('home');
});

Route::get('/Users/reset/{code}', function($code)
{

	$User = User::where('code', '=', $code)->first();
	return View::make('Users/newpassword',['User'=>$User]);
});


Route::get('/Users/forgetpassword', function()
{
	return View::make('/Users/forgetpassword');
});
	Route::post('Users/resetlink', array('as'=>'Users/resetlink', 'uses' => 'UsersController@resetlink'));
	Route::post('Users/resetpassword', array('as'=>'Users.resetpassword', 'uses' => 'UsersController@resetpassword'));


	Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	Route::post('login', array('uses' => 'HomeController@doLogin'));
	Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::resource('Users','UsersController');
Route::get('/', function()
{
	return View::make('/Users/create');
});
