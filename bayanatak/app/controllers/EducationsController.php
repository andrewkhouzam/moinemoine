<?php

class EducationsController extends BaseController {

	/**
	 * Education Repository
	 *
	 * @var Education
	 */
	protected $education;

	public function __construct(Education $education)
	{
		$this->education = $education;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$educations =  Auth::User()->cv->educations;

		return View::make('educations.index', compact('educations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('educations.create');
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

			$education = $this->education->create($input);
			
			Auth::User()->cvs()->first()->educations()->save($education);

			//$this->education->create($input);

				return Redirect::to('home')->withUser(Auth::User());
		}

		return Redirect::route('educations.create')
			->withInput()
			->withErrors($validation);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$education = $this->education->findOrFail($id);

		return View::make('educations.show', compact('education'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$education = $this->education->find($id);

		if (is_null($education))
		{
			return Redirect::route('educations.index');
		}

		return View::make('educations.edit', compact('education'));
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
			$education = $this->education->find($id);
			$education->update($input);

			return Redirect::route('educations.show', $id);
		}

		return Redirect::route('educations.edit', $id)
			->withInput()
			->withErrors($validation);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->education->find($id)->delete();

		return Redirect::route('educations.index');
	}

}
