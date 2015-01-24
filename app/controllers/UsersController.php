<?php

class UsersController extends \BaseController {

    protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = User::all();
        return Response::json($user, 200);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    public function getLogin(){
        $this->layout->content = View::make('blog.login');
    }

    public function postLogin(){
        // Baca input
        $input = Input::only('email', 'password');

        // Validasi Input User
        $v = Validator::make($input, User::$loginRule);
        if ( $v->fails() ) return Redirect::back()->withErrors($v);

        // Attempt Login
        if (!Auth::attempt($input))
            return Redirect::route('login.get');

        return Redirect::route('dashboard');
    }

}
