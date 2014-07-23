
<?php

class UsersController extends \BaseController {


public function resetlink(){
$User = User::where('username', '=',Input::get('username'))->where('email', '=',Input::get('email'))->first();
$User->code= str_random(60);
$User->save();
Mail::send('emails.auth.resettosend',array('link'=> URL::route('resetpassword', $User->code),'username'=>Input::get('username')),function($message){
		$message->to(Input::get('email'),Input::get('username'))->subject("bayanatak password reset link");
	});

	return   'we sent the link to'.Input::get('email');
}




public function store(){
	$User = new User;
	$User->name = Input::get('name');
	$User->username=Input::get('username');
	$User->email = Input::get('email');
	$User->password = Hash::make(Input::get('password'));
	$User->code= str_random(60);
	$User->active='0';
$User->save();
	Mail::send('emails.auth.tosend',array('link'=> URL::route('activate', $User->code),'username'=>$User->username),function($message)use($User){
		$message->to($User->email,$User->username)->subject("Activate Account");
	});
	
    
	return   View::make('Users/www');
}
public function create(){
	return  View::make('Users.create');
}













public function resetpassword(){
$User=User::find(Input::get('userid'));
if(Input::get('password')==Input::get('rpassword')){
$User->password = Hash::make(Input::get('password'));
$User->code ='';
$User->save();
	return Redirect::to('login');
}
else{
	return  View::make('Users/newpassword',['userid'=>$User]);
}
}


// public function newpassword(){
// 	$User = new User;
// 	$User->name = Input::get('name');
// 	$User->username=Input::get('username');
// 	$User->email = Input::get('email');
// 	$User->password = Input::get('password');
// 	$User->code= str_random(60);
// 	$User->active='0';
// $User->save();
// 	Mail::send('emails.auth.tosend',array('link'=> 'http://localhost/bayanatak/public/Users/activate/'.$User->code,'username'=>$User->username),function($message)use($User){
// 		$message->to($User->email,$User->username)->subject("sha3'l el account");
// 	});






// public function destroy($name){
// 	// return "f";
// 		$User = User::where('name', '=', $name)->delete();
// 			return Redirect::to('/Users');

// //return Redirect::to('tito');
// }



// public function show($name){
// 		$User = User::where('name', '=', $name)->first();
// 	return View::make(' Users/show',['User'=>$User]);
// }
}
