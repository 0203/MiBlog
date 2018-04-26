<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//        $stripe = resolve('App\Billing\Stripe');
//
//        dd($stripe);

Auth::routes();
Route::get('/welcome', 'HomeController@getWelcome');
Route::get('/register','HomeController@getRegister')->name('register');
Route::get('/login','HomeController@getLogin')->name('login');
Route::get('/logout','HomeController@getLogout');

//post
Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

//comment
Route::post('/posts/{post}/comment', 'CommentController@store');

//tags
Route::get('/posts/tags/{tag}','TagsController@index');


Route::get('/home', 'HomeController@index')->name('home');
