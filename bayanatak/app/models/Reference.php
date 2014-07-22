<?php

class Reference extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'phone_number' => 'required',
		'address' => 'required',
		'e_mail' => array('required','email'),
		'link' => array('required','url'),
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
