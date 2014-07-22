<?php

class Workshop extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'date' => 'required',
		'institute' => array('required','alpha_num'),
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
