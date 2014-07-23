<?php

class CvsController extends BaseController {

	/**
	 * Cv Repository
	 *
	 * @var Cv
	 */
	protected $cv;

	public function __construct(Cv $cv)
	{
		$this->cv = $cv;
	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){


		$cvs = Auth::User()->cv;

		return View::make('cvs.index', compact('cvs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cvs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Cv::$rules);

		if ($validation->passes())
		{

			if (Input::hasFile('photo')) {
				$name = substr(md5(rand() . Input::file('photo')->getClientOriginalName()), 0, 10)  . "." . Input::file('photo')->getClientOriginalExtension();
				// return $_FILES['photo'];
				Image::make($_FILES['photo']['tmp_name'])->save('photos/original/' . $name);
				Image::make($_FILES['photo']['tmp_name'])->resize(62,62)->save('photos/thumb/' . $name);
				$input['photo'] = $name;
			}


			$cv = $this->cv->create($input);

			Auth::User()->cv()->save($cv);
			//return Auth::User()->cv()->first();


				return Redirect::to('home')->withUser(Auth::User());
		}

		return Redirect::route('cvs.create')
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
		$cv = $this->cv->findOrFail($id);

		return View::make('cvs.show', compact('cv'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cv = $this->cv->find($id);

		if (is_null($cv))
		{
			return Redirect::route('cvs.index');
		}

		return View::make('cvs.edit', compact('cv'));
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
		$validation = Validator::make($input, Cv::$rules);

		if ($validation->passes())
		{
			$cv = $this->cv->find($id);
			$cv->update($input);

			return Redirect::route('cvs.show', $id);
		}

		return Redirect::route('cvs.edit', $id)
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
		$this->cv->find($id)->delete();

		return Redirect::route('cvs.index');
	}

}
