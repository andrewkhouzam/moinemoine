<?php

class Cv extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
<<<<<<< HEAD
		// 'first_name' => array ('required','alpha'),
		// 'surname' =>  array ('required','alpha'),
		// 'date_of_birth' => 'required',
		// 'nationality' => 'required',
		// 'address' => 'required',
		// 'e_mail' => array ('required','email'),
		// 'phone_number' => array('required','integer'),
		// 'mobile_number' =>  array('required','integer'),
		// 'web' => array('required','url'),
		// 'photo' => 'required'
=======
		'first_name' => array ('required','alpha'),
		'surname' =>  array ('required','alpha'),
		'date_of_birth' => 'required',
		'nationality' => 'required',
		'address' => 'required',
		'e_mail' => array ('required','email'),
		'phone_number' => array('required'),
		'mobile_number' =>  array('required'),
		'web' => array('url'),
        'photo' => 'required'
		
>>>>>>> 8dce1b2a611e4c491e699445fd6939d717aa263a
	);

		 public function user()
    {
        return $this->belongsTo('User');
    }

      public function educations()
    {
        return $this->hasMany('Education','cv_id');
    }
      public function awards()
    {
        return $this->hasMany('Award','cv_id');
    }
      public function hobbys()
    {
        return $this->hasMany('Hobby','cv_id');
    }
      public function languages()
    {
        return $this->hasMany('Language','cv_id');
    }
      public function objectives()
    {
        return $this->hasMany('Objective','cv_id');
    }
        public function Reference()
    {
        return $this->hasMany('Objective','cv_id');
    }
        public function skills()
    {
        return $this->hasMany('Skill','cv_id');
    }
        public function work_experiences()
    {
        return $this->hasMany('Work_experience','cv_id');
    }
        public function workshops()
    {
        return $this->hasMany('Workshop','cv_id');
    }

}
