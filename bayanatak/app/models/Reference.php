<?php

class Reference extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'phone_number' => 'required',
		'address' => 'required',
		'e_mail' => 'required',
		'link' => 'required'
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
