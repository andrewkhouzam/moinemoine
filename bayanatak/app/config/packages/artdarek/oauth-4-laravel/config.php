<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '656304257792939',
            'client_secret' => '146f168f7561b729579c5aebbbbfa827',
           'scope' => array('email','read_friendlists','user_online_presence'),
        ),


        'Linkedin' => array(
             'client_id'     => '75nt8ln8uxgac9',
             'client_secret' => 'ggZlSbIYUpHL6c0M',
             'redirectUri'   =>  url('loginlinkedin'),
	         'scope' => ['r_basicprofile', 'r_emailaddress', 'r_contactinfo', 'r_fullprofile']
        ), 


        


        'Google' => array(
             'client_id'     => '636833937588-p8gofgrdbp5e6ocb21ruifjdefvep13l.apps.googleusercontent.com',
             'client_secret' => '3fr9b-xHtHnT7lY0GGD1Y42q',
             'scope'         => array('https://www.googleapis.com/auth/plus.login', 'email')
        ),		

	)

);