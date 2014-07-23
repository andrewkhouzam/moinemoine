<?php

class Objective extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'objective' => array('required','alpha')
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
