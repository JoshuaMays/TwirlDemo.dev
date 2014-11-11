<?php

class StylistsController extends \BaseController {

	/**
	 * Display a listing of stylists
	 *
	 * @return Response
	 */
	public function index()
	{
		// $stylists = Stylist::all();

		return View::make('stylists.index');
	}

	/**
	 * Show the form for creating a new stylist
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('stylists.create');
	}

	/**
	 * Store a newly created stylist in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Stylist::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Stylist::create($data);

		return Redirect::route('stylists.index');
	}

	/**
	 * Display the specified stylist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$stylist = Stylist::findOrFail($id);

		return View::make('stylists.show', compact('stylist'));
	}

	/**
	 * Show the form for editing the specified stylist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$stylist = Stylist::find($id);

		return View::make('stylists.edit', compact('stylist'));
	}

	/**
	 * Update the specified stylist in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$stylist = Stylist::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Stylist::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$stylist->update($data);

		return Redirect::route('stylists.index');
	}

	/**
	 * Remove the specified stylist from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Stylist::destroy($id);

		return Redirect::route('stylists.index');
	}

}
