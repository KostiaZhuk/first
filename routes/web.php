<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'TestController@index');

Route::resource('topic','TopicController');
Route::resource('block','BlockController');

Route::resource('/','TopicController@index');
Route::post('topic/search','TopicController@search');

