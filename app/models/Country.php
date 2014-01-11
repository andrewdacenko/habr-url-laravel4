<?php

class Country extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required|alpha_num|between:2,255|unique:countries,name',
		'code' => 'required|alpha|size:2|unique:countries,code'
	);

	public function cities()
    {
        return $this->hasMany('City');
    }

    public function products()
    {
        return $this->hasManyThrough('Product', 'City');
    }
}
