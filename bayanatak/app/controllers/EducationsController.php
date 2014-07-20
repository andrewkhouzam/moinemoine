<?php

class EducationsController extends BaseController {

	/**
	 * Education Repository
	 *
	 * @var Education
	 */
	protected $Education;

	public function __construct(Education $Education)
	{
		$this->Education = $Education;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Educations = $this->Education->all();

		return View::make('Educations.index', compact('Educations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Educations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Education::$rules);

		if ($validation->passes())
		{
			$this->Education->create($input);

			return Redirect::route('Educations.index');
		}

		return Redirect::route('Educations.create')
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
		$Education = $this->Education->findOrFail($id);

		return View::make('Educations.show', compact('Education'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Education = $this->Education->find($id);

		if (is_null($Education))
		{
			return Redirect::route('Educations.index');
		}

		return View::make('Educations.edit', compact('Education'));
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
		$validation = Validator::make($input, Education::$rules);

		if ($validation->passes())
		{
			$Education = $this->Education->find($id);
			$Education->update($input);

			return Redirect::route('Educations.show', $id);
		}

		return Redirect::route('Educations.edit', $id)
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
		$this->Education->find($id)->delete();

		return Redirect::route('Educations.index');
	}

}
