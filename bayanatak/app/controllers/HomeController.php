<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
public function loginWithFacebook() {

    // get data from input
    $code = Input::get( 'code' );

    // get fb service
    $fb = OAuth::consumer( 'Facebook', URL::to('loginfacebook'), array('email'));

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $code ) ) {

        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $fb->request( '/me?access_token='.$token->getAccessToken() ), true );



                $users = User::where('facebook_id', '=', $result['id'])->get();

     
       if(count($users)>0) {
       
       	$userdata = array(
				'email' 	=> $result['link'],
				'password' 	=> '1234567',
				'facebook_id'  => $result['id']
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return View::make('home')->withUser(Auth::User());
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

                    }

       else{
       	$User = new User;
	$User->name =  $result['name'];
	$User->email = $result['link'];
	$User->password = Hash::make('1234567');
	$User->facebook_id= $result['id'];
$User->save();



}

        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        echo $message. "<br/>";

        //Var_dump
        //display whole array().
        dd($result);

    }
    // if not ask for permission first
    else {
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
         return Redirect::to( (string)$url );
    }

}
	public function loginWithLinkedin() {

        // get data from input
        $code = Input::get( 'code' );

        $linkedinService = OAuth::consumer( 'Linkedin' );


        if ( !empty( $code ) ) {

            // This was a callback request from linkedin, get the token
            $token = $linkedinService->requestAccessToken( $code );
            // Send a request with it. Please note that XML is the default format.
            $result = json_decode($linkedinService->request('/people/~:(firstName,id,email-address,lastName,pictureUrl)?format=json'), true);


        $users = User::where('linkedin_id', '=', $result['id'])->get();

     
       if(count($users)>0) {
       
       	$userdata = array(
				'email' 	=> $result['emailAddress'] ,
				'password' 	=> '1234567',
				'linkedin_id'  => $result['id']
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return View::make('home')->withUser(Auth::User());
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

                    }

       else{
       	$User = new User;
	$User->name =  $result['firstName'];
	$User->email =  $result['emailAddress'];
	$User->password = Hash::make('1234567');
	$User->linkedin_id= $result['id'];
$User->save();



}

            // Show some of the resultant data
            echo 'Your linkedin first name is ' . $result['firstName'] . ' and your last name is ' . $result['lastName'];


            //Var_dump
            //display whole array().
            dd($result);

        }// if not ask for permission first
        else {
            // get linkedinService authorization
            $url = $linkedinService->getAuthorizationUri(array('state'=>'DCEEFWF45453sdffef424','scope'=>[ 'r_emailaddress']));


            // return $url;

            // return to linkedin login url
            return Redirect::to( (string)$url );
        }


    }
	public function loginWithGoogle() {
	 $code = Input::get( 'code' );

    // get google service
    $googleService = OAuth::consumer( 'Google' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $code ) ) {

        // This was a callback request from google, get the token
        $token = $googleService->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
        

        $users = User::where('google_id', '=', $result['id'])->get();

     
       if(count($users)>0) {
       
       	$userdata = array(
				'email' 	=> $result['email'] ,
				'password' 	=> '1234567',
				'google_id'  => $result['id']
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return View::make('home')->withUser(Auth::User());
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

                    }

       else{
       	$User = new User;
	$User->name =  $result['name'];
	$User->email =  $result['email'];
	$User->password = Hash::make('1234567');
	$User->google_id= $result['id'];
$User->save();



}





        $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        echo $message. "<br/>";

        //Var_dump
        //display whole array().
        dd($result);

    }
    // if not ask for permission first
    else {

        // get googleService authorization
        $url = $googleService->getAuthorizationUri();

        // return to google login url
        return Redirect::to( (string)$url );
    }
}

	public function showWelcome()
	{
		return View::make('hello');
	}

		public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function doLogin()
	{
		{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			//return Input::get('password');

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password'),
				'active' => '1'
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('home')->withUser(Auth::User());
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

		}
	}
	
	}




	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}

}
