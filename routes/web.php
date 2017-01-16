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



Route::resource('/', 'LibraryController');
Route::get('/libraries', 'LibrariesController@index');
Route::get('/latest', 'LatestController@index');
Route::get('/latestreview', 'LatestReviewController@index');
Route::get('/resourcecenter', 'ResourceCenterController@index');
Route::get('/aboutus','AboutUsController@index');

Route::group(['prefix' => 'backend'], function () {
	Route::get('/',"BackendController@index");
});