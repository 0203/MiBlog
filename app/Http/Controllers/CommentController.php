<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

    public function store(Post $post){

        $this->validate(request(),[

            'body'=>'required|min:5'
        ]);

        Comment::create([
            'post_id'=> $post->id,
            'body'=>request('body')
        ]);

        return back();

    }



}
