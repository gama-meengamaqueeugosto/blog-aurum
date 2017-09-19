<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function blog()
    {
        return view('home', [
            'posts'     => $this->post->orderBy('created_at', 'DESC')->get(),
            'recents'   => $this->post->orderBy('created_at', 'DESC')->take(3)
        ]);
    }

    public function post($slug)
    {
        $post = $this->post->where('slug', '=', $slug)->firstOrFail();
        return view('post', ['post' => $post]);
    }
}
