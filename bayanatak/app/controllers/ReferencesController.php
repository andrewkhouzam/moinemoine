<?php

class ReferencesController extends BaseController {

	/**
	 * Reference Repository
	 *
	 * @var Reference
	 */
	protected $reference;

	public function __construct(Reference $reference)
	{
		$this->reference = $reference;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$references =  Auth::User()->cv->references;

		return View::make('references.index', compact('references'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('references.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Reference::$rules);

		if ($validation->passes())
		{



			$reference = $this->reference->create($input);
			
			Auth::User()->cv()->first()->references()->save($reference);

		

				return View::make('home')->withUser(Auth::User());
		}

		return Redirect::route('references.create')
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
		$reference = $this->reference->findOrFail($id);

		return View::make('references.show', compact('reference'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reference = $this->reference->find($id);

		if (is_null($reference))
		{
			return Redirect::route('references.index');
		}

		return View::make('references.edit', compact('reference'));
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
		$validation = Validator::make($input, Reference::$rules);

		if ($validation->passes())
		{
			$reference = $this->reference->find($id);
			$reference->update($input);

			return Redirect::route('references.show', $id);
		}

		return Redirect::route('references.edit', $id)
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
		$this->reference->find($id)->delete();

		return Redirect::route('references.index');
	}

}
