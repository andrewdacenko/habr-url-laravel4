<?php

class City extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required|alpha_num|between:2,255',
		'slug' => 'required|alpha_num|between:2,255|unique:cities,slug',
		'country_id' => 'required|exists:countries,id'
	);

	public static $sluggable = array(
        'build_from' => 'name_with_country_code',
        'save_to'    => 'slug',
    );

    public function country()
    {
        return $this->belongsTo('Country');
    }

    public function products()
    {
        return $this->hasMany('Product');
    }

    public function getNameWithCountryCodeAttribute() {
        return $this->country->code . ' ' . $this->name;
    }
}
