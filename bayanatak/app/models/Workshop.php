<?php

class Workshop extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'date' => 'required',
		'institute' => 'required'
	);
}
