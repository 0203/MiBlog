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

Auth::routes();
Route::get('/logout','HomeController@getLogout');

//post
Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

//comment
Route::post('/posts/{post}/comment', 'CommentController@store');


Route::get('/home', 'HomeController@index')->name('home');
