<?php

class AwardsController extends BaseController {

	/**
	 * Award Repository
	 *
	 * @var Award
	 */
	protected $award;

	public function __construct(Award $award)
	{
		$this->award = $award;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$awards = Auth::User()->cvs[0]->awards;
        
		return View::make('awards.index', compact('awards'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('awards.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Award::$rules);

		if ($validation->passes())
		{


			$award = $this->award->create($input);
			
			Auth::User()->cvs()->first()->awards()->save($award);

			

				return Redirect::to('home')->withUser(Auth::User());
		}

		return Redirect::route('awards.create')
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
		$award = $this->award->findOrFail($id);

		return View::make('awards.show', compact('award'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$award = $this->award->find($id);

		if (is_null($award))
		{
			return Redirect::route('awards.index');
		}

		return View::make('awards.edit', compact('award'));
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
		$validation = Validator::make($input, Award::$rules);

		if ($validation->passes())
		{
			$award = $this->award->find($id);
			$award->update($input);

			return Redirect::route('awards.show', $id);
		}

		return Redirect::route('awards.edit', $id)
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
		$this->award->find($id)->delete();

		return Redirect::route('awards.index');
	}

}
