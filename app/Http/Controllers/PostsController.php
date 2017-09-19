<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostSaveRequest;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post.index', ['posts' => Post::orderBy('created_at', 'DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->post->fill($request->old());

        $view       = view('dashboard.post.create');
        $view->edit = false;
        $view->post = $this->post;

        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostSaveRequest $request)
    {
        $this->post->fill($request->all());

        if($request->hasFile('image'))
        {
            $this->post->uploadImage($request->file('image'));
        }

        $this->post->save();

        return redirect()->route('adm.post.index')->with(['status' => 'Post cadastrado com sucesso']);
    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->post->findOrFail($id);

        $post->destroyImage($post->image);
        $post->destroy($id);

        return redirect()->route('adm.post.index')->with(['status' => 'Post excluído com sucesso']);        
    }
}
