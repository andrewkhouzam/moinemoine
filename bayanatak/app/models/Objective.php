<?php

class Objective extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'objective' => 'required'
	);
}
