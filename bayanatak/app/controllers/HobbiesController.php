<?php

class HobbiesController extends BaseController {

	/**
	 * Hobby Repository
	 *
	 * @var Hobby
	 */
	protected $Hobby;

	public function __construct(Hobby $Hobby)
	{
		$this->Hobby = $Hobby;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Hobbies = $this->Hobby->all();

		return View::make('Hobbies.index', compact('Hobbies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Hobbies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Hobby::$rules);

		if ($validation->passes())
		{
			$this->Hobby->create($input);

			return Redirect::route('Hobbies.index');
		}

		return Redirect::route('Hobbies.create')
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
		$Hobby = $this->Hobby->findOrFail($id);

		return View::make('Hobbies.show', compact('Hobby'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Hobby = $this->Hobby->find($id);

		if (is_null($Hobby))
		{
			return Redirect::route('Hobbies.index');
		}

		return View::make('Hobbies.edit', compact('Hobby'));
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
		$validation = Validator::make($input, Hobby::$rules);

		if ($validation->passes())
		{
			$Hobby = $this->Hobby->find($id);
			$Hobby->update($input);

			return Redirect::route('Hobbies.show', $id);
		}

		return Redirect::route('Hobbies.edit', $id)
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
		$this->Hobby->find($id)->delete();

		return Redirect::route('Hobbies.index');
	}

}
