<?php

class Hobby extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => array('required','alpha')
	);

		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
