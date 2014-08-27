<?php

class LivresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /livres
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('livres.index')-> with('livres', Livre::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /livres/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('livres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /livres
	 *
	 * @return Response
	 */
	public function store()
	{
		$livre = new Livre;
        $livre -> create(Input::all());
        return Redirect::to('livres')->with('flash_notice', 'Livre bien ajouté.');
	}

	/**
	 * Display the specified resource.
	 * GET /livres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('livres.show')->with('livre', Livre::find($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /livres/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('livres.edit')-> with('livre', Livre::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /livres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$livre = Livre::find($id);
        $livre -> update(Input::all());
        return Redirect::to('livres')->with('flash_notice', 'Livre bien modifié.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /livres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

    $livre = Livre::find($id);
    $livre->delete();
    return Redirect::to('livres')->with('flash_notice', 'Livre bien supprimé.');
	}

}