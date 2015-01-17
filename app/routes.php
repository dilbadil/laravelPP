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
Route::get('about', ['as'=>'about','uses'=>'PageController@getAbout']);
Route::get('categories', ['as'=>'categories','uses'=>'PageController@getCategories']);
Route::get('login', ['as'=>'login.get','uses'=>'UsersController@getLogin']);
Route::post('login', ['as'=>'login.post','uses'=>'UsersController@postLogin']);
Route::get('dashboard', function(){
    return 'Ini Dashboard';
});
Route::resource('users','UsersController');
