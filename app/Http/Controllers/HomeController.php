<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Post;
use App\Repositories;
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
        $this->middleware('auth')->except(['index', 'getWelcome','getLogin','getRegister']);;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $posts){

          $posts = $posts->all();

//        $posts = (new Repositories\Posts)->all();

//        $posts = Post::latest();

        if ($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

//        $posts = $posts->get();


        return view('post.index',compact('posts'));
    }

    public function getLogout(){

        auth()->logout();

        return view('auth.login');
    }

    public function getWelcome(){
        return view('emails.welcome');
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function getLogin(){
        return view('auth.login');
    }

}
