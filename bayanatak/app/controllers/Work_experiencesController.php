<?php

class Work_experiencesController extends BaseController {

	/**
	 * Work_experience Repository
	 *
	 * @var Work_experience
	 */
	protected $work_experience;

	public function __construct(Work_experience $work_experience)
	{
		$this->work_experience = $work_experience;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

			
		$work_experiences = Auth::User()->cvs[0]->workexperiences;
		

		return View::make('work_experiences.index', compact('work_experiences'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('work_experiences.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Work_experience::$rules);

		if ($validation->passes())
		{


			$work_experience = $this->work_experience->create($input);
			
			Auth::User()->cvs()->first()->work_experiences()->save($work_experience);


				return Redirect::to('home')->withUser(Auth::User());
		}

		return Redirect::route('work_experiences.create')
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
		$work_experience = $this->work_experience->findOrFail($id);

		return View::make('work_experiences.show', compact('work_experience'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$work_experience = $this->work_experience->find($id);

		if (is_null($work_experience))
		{
			return Redirect::route('work_experiences.index');
		}

		return View::make('work_experiences.edit', compact('work_experience'));
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
		$validation = Validator::make($input, Work_experience::$rules);

		if ($validation->passes())
		{
			$work_experience = $this->work_experience->find($id);
			$work_experience->update($input);

			return Redirect::route('work_experiences.show', $id);
		}

		return Redirect::route('work_experiences.edit', $id)
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
		$this->work_experience->find($id)->delete();

		return Redirect::route('work_experiences.index');
	}

}
