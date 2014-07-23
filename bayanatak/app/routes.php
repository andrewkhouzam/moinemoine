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
Route::get('/Users/activate/{code}', array('as'=>'activate', function($code)
{

	$User = User::where('code', '=', $code)->first();
	$User->active='1';
	$User->code='';
	$User->save();
	return Redirect::to('login');
;
}));


Route::get('home', function()
{
	return View::make('home')->withUser(Auth::user());
});


Route::get('/Users/reset/{code}', array('as'=>'resetpassword',function($code)
{

	$User = User::where('code', '=', $code)->first();
	return View::make('Users/newpassword',['userid'=>$User->id]);
}));


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
	return View::make('/login');
});

Route::get('/d', array('as'=>'htmlcvd',function()
{


	$pdf = PDF::loadView('htmlcv', ['user'=>(Auth::User())]);
return $pdf->download('invoice.pdf');
}));

Route::get('/di', array('as'=>'htmlcvg',function()
{


	return View::make('htmlcv', ['user'=>(Auth::User())]);
 
}));


Route::get('new', function()
{
	return View::make('/Users/create');
});

Route::resource('cvs', 'CvsController');

Route::resource('objectives', 'ObjectivesController');

Route::resource('work_experiences', 'Work_experiencesController');

Route::resource('skills', 'SkillsController');

Route::resource('references', 'ReferencesController');

Route::resource('awards', 'AwardsController');

Route::resource('workshops', 'WorkshopsController');

Route::resource('languages', 'LanguagesController');

Route::resource('educations', 'EducationsController');


Route::resource('hobbies', 'HobbiesController');
