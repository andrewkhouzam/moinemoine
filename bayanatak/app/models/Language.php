<?php

class Language extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'language' => 'required',
		'language_scale' => 'required'
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}

