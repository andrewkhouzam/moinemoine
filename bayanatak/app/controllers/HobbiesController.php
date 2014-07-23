<?php

class HobbiesController extends BaseController {

	/**
	 * Hobby Repository
	 *
	 * @var Hobby
	 */
	protected $hobby;

	public function __construct(Hobby $hobby)
	{
		$this->hobby = $hobby;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hobbies = $this->hobby->all();

		return View::make('hobbies.index', compact('hobbies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('hobbies.create');
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



			$hobby = $this->hobby->create($input);
			
			Auth::User()->cv()->first()->hobbys()->save($hobby);

			

return Redirect::to('home')->withUser(Auth::User());
		}

		return Redirect::route('hobbies.create')
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
		$hobby = $this->hobby->findOrFail($id);

		return View::make('hobbies.show', compact('hobby'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hobby = $this->hobby->find($id);

		if (is_null($hobby))
		{
			return Redirect::route('hobbies.index');
		}

		return View::make('hobbies.edit', compact('hobby'));
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
			$hobby = $this->hobby->find($id);
			$hobby->update($input);

			return Redirect::route('hobbies.show', $id);
		}

		return Redirect::route('hobbies.edit', $id)
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
		$this->hobby->find($id)->delete();

		return Redirect::route('hobbies.index');
	}

}
