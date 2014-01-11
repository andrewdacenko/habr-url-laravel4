<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required|alpha_num|between:2,255',
		'price' => 'required|numeric|between:2,255',
		'city_id' => 'required|exists:cities,id'
	);

	public static $sluggable = array(
		'build_from' => 'name',
        'save_to'    => 'slug',
	);

	public function city()
    {
        return $this->belongsTo('City');
    }
}
