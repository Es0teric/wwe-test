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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
});

Route::post('/video/add', ['uses' => 'VideosController@store']);

/*Route::middleware(['guest'])->group(function() {
	
	Route::get('/dashboard', ['uses' => 'DashboardController@index']);

	//list all videos
	Route::get('/videos', ['uses' => 'VideosController@show']);

	//add new video
	Route::get('/videos/add',['uses' => 'VideosController@add']);
	Route::post('/videos/add', ['uses' => 'VideosController@store']);

	//edit video based off video id
	Route::get('/videos/edit/{vid_id}', ['uses' => 'VideosController@edit']);

	//remove video
	Route::delete('/videos/', ['uses' => 'VideosController@destroy']);

});*/

Route::get('/dashboard', ['uses' => 'DashboardController@index']);
