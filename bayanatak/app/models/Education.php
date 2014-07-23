<?php

class Education extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'institute' => array('required','alpha_num'),
		'degree' => array('required','alpha_num'),
		'major' => array('required','alpha'),
		'class' => array('required','alpha_num'),
		'description' => array('required','alpha_num'),
		'city' => array('required','alpha'),
		'country' => array('required','alpha'),
		'gpa' => 'required',
		'honors' => 'required',
		'scholorship' => 'required'
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
