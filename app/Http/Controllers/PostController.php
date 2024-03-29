<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function show($id)
    {

        $post = Post::find($id);

        return view('post.post', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {

//       $post = new Post();

//       $post->title = request("title");
//       $post->body = request("post");
//
//       $post->save();

        $this->validate(request(), [

            'title' => 'required',
            'post' => 'required',

        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('post'),
            'user_id' => auth()->id()
        ]);

        session()->flash('message', 'Your post has now been published!');

        return redirect('/');

    }

}
