<?php

class Education extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'institute' => 'required',
		'degree' => 'required',
		'major' => 'required',
		'class' => 'required',
		'description' => 'required',
		'city' => 'required',
		'country' => 'required',
		'gpa' => 'required',
		'honors' => 'required',
		'scholorship' => 'required'
	);
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
