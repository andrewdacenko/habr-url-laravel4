<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('countries', 'CountriesController');

Route::resource('cities', 'CitiesController');

Route::resource('products', 'ProductsController');

Route::get('country/{code}', array('as' => 'country', function($code)
{
	$country = Country::where('code', '=', $code)->firstOrFail();

	return View::make('products', array('products' => $country->products));
}));

Route::get('city/{slug}', array('as' => 'city', function($slug)
{
	$city = City::where('slug', '=', $slug)->firstOrFail();

	return View::make('products', array('products' => $city->products));
}));

Route::get('product/{slug}', array('as' => 'product', function($slug)
{
	$product = Product::where('slug', '=', $slug)->firstOrFail();

	return View::make('product', compact('product'));
}));