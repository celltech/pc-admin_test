<?php

class Store extends \Eloquent {

	// Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    	'store_state' => 'in:NY,NJ,CT',
    	'store_zip' => 'digits_between:5,10',
    	'store_tel' => 'digits:10', 
    	'store_fax' => 'digits:10',

    ];

    // Don't forget to fill this array
    protected $guarded = array('id');

}