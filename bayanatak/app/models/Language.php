<?php

class Language extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'language' => array('required','alpha'),
		'language_scale' => 'required'
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}

