<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as'=>'home','uses'=>'PageController@getIndex']);
Route::get('/post-title', ['as'=>'post','uses'=>'PageController@getPostTitle']);
Route::get('/about', ['as'=>'about','uses'=>'PageController@getAbout']);
Route::get('/categories', ['as'=>'categories','uses'=>'PageController@getCategories']);
