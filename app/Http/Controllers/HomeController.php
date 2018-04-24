<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $posts = Post::latest();

        if ($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::archives();

        return view('post.index',compact('posts'));
    }

    public function getLogout(){

        auth()->logout();

        return view('auth.login');
    }

}
