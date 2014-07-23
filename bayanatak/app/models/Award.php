<?php

class Award extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'award' => array('required','alpha_num'),
		'date' => 'required',
		'institute' => array('required','alpha_num')
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }

}
