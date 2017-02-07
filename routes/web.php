<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your applic

ation. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('libraries/city/{id}', function($id){
	$cat = App\LocationImage::where('category_id', $id)->get();
});

Route::resource('/', 'LibraryController');
Route::get('/libraries', 'LibrariesController@index');
Route::get('/latest', 'LatestController@index');
Route::get('/latestreview', 'LatestReviewController@index');
Route::get('/resourcecenter', 'LatestViewController@index');
Route::get('/aboutus','AboutUsController@index');

Route::get('/bookdetail', 'BookDetailController@index');
Route::resource('/library_detail', 'LibraryDetailController');
Route::resource('/new_detail','NewDetailController');

Route::get('backend/login', "AccessController@getLogin");
Route::get("backend/logout", "AccessController@logout");
Route::post('backend/login', 'AccessController@postLogin');
Route::get('backend/register', "AccessController@getRegister");
Route::post('backend/register', 'AccessController@postRegister');



Route::group(['prefix' =>  'backend', 'middleware'=>['sentinel', 'isAdmin']], function () {
	Route::get('/','BackendController@index');
	Route::resource('user','UserController');
	Route::resource('role','RoleController');
	Route::resource('category', 'CategoryController');
	Route::resource('library-slider','LibrarySliderController');
	Route::resource('marketing-image', 'MarketingImageController');
	Route::resource('resourcecenter-image', 'ResourceCenterController');
	Route::resource('latest-news-slider','LatestNewsSliderController');
	Route::resource('author', 'AuthorController');
	Route::resource('resourcecategory', 'ResourceCategoryController');
	Route::resource('latest-news-slider','LatestNewsSliderController');
	Route::resource('latest-news','LatestNewsController');
	Route::resource('location_image','LocationImageController');
	Route::resource('latest-review-slider','LatestReviewSliderController');
	Route::get('library-category',['uses'=>'LibraryCategoryController@manageCategory']);
	Route::post('add-category',['as'=>'add.category','uses'=>'LibraryCategoryController@addCategory']);
	Route::get('library-category/edit/{id}','LibraryCategoryController@edit');

	Route::delete('library-category/delete/{id}','LibraryCategoryController@destroy');
	Route::resource('update-category/{id}','LibraryCategoryController@update');
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

