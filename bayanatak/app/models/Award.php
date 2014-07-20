<?php

class Award extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'award' => 'required',
		'date' => 'required',
		'institute' => 'required'
	);
}
