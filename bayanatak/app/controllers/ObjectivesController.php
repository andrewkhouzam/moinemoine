<?php

class ObjectivesController extends BaseController {

	/**
	 * Objective Repository
	 *
	 * @var Objective
	 */
	protected $objective;

	public function __construct(Objective $objective)
	{
		$this->objective = $objective;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$objectives = Auth::User()->cv->objectives;

		return View::make('objectives.index', compact('objectives'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('objectives.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Objective::$rules);

		if ($validation->passes())
		{


			$objective = $this->objective->create($input);
			
			Auth::User()->cv()->first()->objectives()->save($objective);

		

				return View::make('home')->withUser(Auth::User());
		}

		return Redirect::route('objectives.create')
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
		$objective = $this->objective->findOrFail($id);

		return View::make('objectives.show', compact('objective'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$objective = $this->objective->find($id);

		if (is_null($objective))
		{
			return Redirect::route('objectives.index');
		}

		return View::make('objectives.edit', compact('objective'));
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
		$validation = Validator::make($input, Objective::$rules);

		if ($validation->passes())
		{
			$objective = $this->objective->find($id);
			$objective->update($input);

			return Redirect::route('objectives.show', $id);
		}

		return Redirect::route('objectives.edit', $id)
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
		$this->objective->find($id)->delete();

		return Redirect::route('objectives.index');
	}

}
