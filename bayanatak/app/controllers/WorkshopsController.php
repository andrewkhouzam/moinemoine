<?php

class WorkshopsController extends BaseController {

	/**
	 * Workshop Repository
	 *
	 * @var Workshop
	 */
	protected $workshop;

	public function __construct(Workshop $workshop)
	{
		$this->workshop = $workshop;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$workshops = $this->workshop->all();

		return View::make('workshops.index', compact('workshops'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('workshops.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Workshop::$rules);

		if ($validation->passes())
		{



			$workshop = $this->workshop->create($input);
			
			Auth::User()->cv()->first()->workshops()->save($workshop);



				return View::make('home')->withUser(Auth::User());
		}

		return Redirect::route('workshops.create')
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
		$workshop = $this->workshop->findOrFail($id);

		return View::make('workshops.show', compact('workshop'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$workshop = $this->workshop->find($id);

		if (is_null($workshop))
		{
			return Redirect::route('workshops.index');
		}

		return View::make('workshops.edit', compact('workshop'));
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
		$validation = Validator::make($input, Workshop::$rules);

		if ($validation->passes())
		{
			$workshop = $this->workshop->find($id);
			$workshop->update($input);

			return Redirect::route('workshops.show', $id);
		}

		return Redirect::route('workshops.edit', $id)
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
		$this->workshop->find($id)->delete();

		return Redirect::route('workshops.index');
	}

}
