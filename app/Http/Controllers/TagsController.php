<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class TagsController extends Controller
{
   public function index(Tag $tags){

       $posts = $tags->posts;

       return view('post.index', compact('posts'));

   }
}
