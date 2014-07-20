<?php

class Cv extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'first_name' => 'required',
		'surname' => 'required',
		'date_of_birth' => 'required',
		'nationality' => 'required',
		'address' => 'required',
		'e_mail' => 'required',
		'phone_number' => 'required',
		'mobile_number' => 'required',
		'web' => 'required',
		'photo' => 'required'
	);
}
