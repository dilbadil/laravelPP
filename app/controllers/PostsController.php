<?php

class PostsController extends \BaseController {

    protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		$data = [
			'posts' => $posts,
		];
        $this->layout->content = View::make('posts.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		$data = [
			'post' => $post,
		];
        $this->layout->content = View::make('posts.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$data = [
			'post' => $post,
		];
        $this->layout->content = View::make('posts.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$post = Post::find($id);
        $post->body = $input['body'];
        $post->title = $input['title'];
        $post->save();
		$data = [
			'post' => $post,
		];
		$this->layout->content = View::make('posts.show', $data);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
        $title = $post->title;
        $post->delete();
        $posts = Post::all();
		$data = [
			'posts' => $posts,
		];
		$this->layout->content = View::make('posts.index', $data)->withMessage('"' . $title . '" successfully deleted.');
	}

}
