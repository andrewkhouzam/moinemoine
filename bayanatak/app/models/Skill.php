<?php

class Skill extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'skill_name' => 'required',
		'skill_scale' => 'required'
	);
}
