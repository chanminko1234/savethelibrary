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

Route::get('/bookdetail', 'BookDetailController@index');


Route::get('backend/login', "AccessController@getLogin");
Route::get("backend/logout", "AccessController@logout");
Route::post('backend/login', 'AccessController@postLogin');
Route::get('backend/register', "AccessController@getRegister");
Route::post('backend/register', 'AccessController@postRegister');

Route::group(['prefix' =>  'backend', 'middleware'=>['sentinel', 'isAdmin']], function () {
	Route::get('/','BackendController@index');
	Route::resource('books','BookController');

	Route::get('books/create', ['as' => 'books.create', 'uses' => 'BookController@create']);

	Route::get('books/edit', 'BookController@edit');
	Route::resource('user','UserController');
	Route::resource('role','RoleController');

});

Route::get("activate/{id}/{activate_code}", function($id, $activate_code){
	$user = Sentinel::findById($id);

	if (Activation::complete($user, $activate_code))
	{
		return "Activation Successfully!";
	}
	else
	{
		return "Not Good!";
	}
});

// Socialize
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');



Route::get('password-test', function(){
	var_dump(md5("123456"));
	var_dump(md5("123456"));
	var_dump(sha1("123456"));
	var_dump(sha1("123456"));
	var_dump(bcrypt("123456"));
	var_dump(bcrypt("123456"));
});

