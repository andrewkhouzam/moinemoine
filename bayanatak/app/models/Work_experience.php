<?php

class Work_experience extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'company_name' => 'required',
		'job_title' => 'required',
		'start_date' => 'required',
		'end_date' => 'required',
		'city' => 'required',
		'country' => 'required',
		'description' => 'required'
	);
}
