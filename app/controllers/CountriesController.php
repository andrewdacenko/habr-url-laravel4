<?php

class CountriesController extends BaseController {

	/**
	 * Country Repository
	 *
	 * @var Country
	 */
	protected $country;

	public function __construct(Country $country)
	{
		$this->country = $country;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$countries = $this->country->all();

		return View::make('countries.index', compact('countries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('countries.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Country::$rules);

		if ($validation->passes())
		{
			$this->country->create($input);

			return Redirect::route('countries.index');
		}

		return Redirect::route('countries.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$country = $this->country->findOrFail($id);

		return View::make('countries.show', compact('country'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$country = $this->country->find($id);

		if (is_null($country))
		{
			return Redirect::route('countries.index');
		}

		return View::make('countries.edit', compact('country'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Country::$rules);

		if ($validation->passes())
		{
			$country = $this->country->find($id);
			$country->update($input);

			return Redirect::route('countries.show', $id);
		}

		return Redirect::route('countries.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->country->find($id)->delete();

		return Redirect::route('countries.index');
	}

}
