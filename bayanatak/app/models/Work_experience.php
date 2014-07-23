<?php

class Work_experience extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'company_name' => array('required','alpha_num'),
		'job_title' => array('required','alpha'),
		'start_date' => 'required',
		'end_date' => 'required',
		'city' => array('required','alpha'),
		'country' => array('required','alpha'),
		'description' => array('required','alpha_num'),
	);

	
		 public function cv()
    {
        return $this->belongsTo('Cv');
    }
}
