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

Route::get('/', 'MainController@index');

Route::get('/news', 'NewsController@index');
Route::get('/news_{page}', 'NewsController@show');
Route::get('/news/{id}', 'NewsController@showOne');

Route::get('/photofolders', 'PhotoFolderController@index');
Route::get('/photofolders_{page}', 'PhotoFolderController@show');
Route::get('/photos_{id}', 'PhotoController@show');

Route::get('/videofolders', 'VideoFolderController@index');
Route::get('/videofolders_{page}', 'VideoFolderController@show');
Route::get('/videofolder/{id}', 'VideoController@show');

Route::get('/events', 'InfoController@index');
Route::get('/congrats', 'InfoController@index');
Route::get('/infos', 'InfoController@index');

Route::get('/events_{page}', 'InfoController@show');
Route::get('/congrats_{page}', 'InfoController@show');
Route::get('/infos_{page}', 'InfoController@show');

Route::get('/event/{id}', 'InfoController@showOne');
Route::get('/congrat/{id}', 'InfoController@showOne');
Route::get('/info/{id}', 'InfoController@showOne');


Route::get('/test', 'TestController@index');
Route::post('/upload_test', 'TestController@upload');

Route::get ('/about', function () {
		return view ('about');	
});

Route::get ('/contact', function () {
		return view ('contact');	
});

Route::get ('/sanda', function () {
		return view ('sanda');	
});

Route::get ('/taolu', function () {
		return view ('taolu');	
});

Auth::routes();

Route::get('/register', function (){
	return redirect ('/login');
	
});


Route::group(['middleware' => 'admin'], function () {

	Route::get('/admin', function () {
		return view('admin.admin_panel');
	});

	//NEWS:
	Route::get('/admin_news', 'NewsController@showAdmin');	
	Route::get('/admin_news_add', function () {
		return view('admin.admin_news_add');
	});	
	Route::post('/admin_news_add', 'NewsController@store');
	Route::get('/admin_news_delete_{id}', 'NewsController@delete');
	Route::get('/admin_news_edit_{id}', 'NewsController@edit');
	Route::post('/admin_news_update_{id}', 'NewsController@update');	
	
	//PHOTO:
	Route::get('/admin_photogallery', 'PhotoFolderController@showAdmin');
	Route::get('/admin_photofolder_add', function () {
		return view('admin.admin_photofolder_add');
	});
	Route::post('/admin_photofolder_add', 'PhotoFolderController@store');	
	Route::post('/admin_photofolder_update_{id}', 'PhotoFolderController@update');
	Route::get('/admin_photofolder_delete_{id}', 'PhotoFolderController@delete');

	Route::get('/admin_photos_add_{id}', 'PhotoController@add');	
	Route::get('/admin_photo_delete_{id}', 'PhotoController@delete');
	Route::post('/admin_photo_upload', 'PhotoController@store');
	
	
	//VIDEO:
	Route::get('/admin_videogallery', 'VideoFolderController@showAdmin');
	Route::get('/admin_videofolder_add', function () {
		return view('admin.admin_videofolder_add');
	});
	Route::post('/admin_videofolder_add', 'VideoFolderController@store');
	Route::post('/admin_videofolder_update_{id}', 'VideoFolderController@update');
	Route::get('/admin_videofolder_delete_{id}', 'VideoFolderController@delete');

	Route::get('/admin_videos_add_{id}', 'VideoController@add');	
	Route::get('/admin_video_delete_{id}', 'VideoController@delete');
	Route::post('/admin_video_upload', 'VideoController@store');
	
	
	//INFO:
	Route::get('/admin_events', 'InfoController@showAdmin');
	Route::get('/admin_congrats', 'InfoController@showAdmin');
	Route::get('/admin_infos', 'InfoController@showAdmin');
	
	Route::get('/admin_info_add', 'InfoController@add');
	Route::get('/admin_event_add', 'InfoController@add');
	Route::get('/admin_congrat_add', 'InfoController@add');
	
	Route::post('/admin_event_add', 'InfoController@store');
	Route::post('/admin_congrat_add', 'InfoController@store');
	Route::post('/admin_info_add', 'InfoController@store');

	Route::get('/admin_info_edit_{id}', 'InfoController@edit');	
	Route::get('/admin_event_edit_{id}', 'InfoController@edit');
	Route::get('/admin_congrat_edit_{id}', 'InfoController@edit');
		
	Route::post('/admin_info_update_{id}', 'InfoController@update');
	Route::get('/admin_info_delete_{id}', 'InfoController@delete');	
	
	//TEST:
	Route::get('/admin_test', function() {
		return view('admin.admin_test');
	});
	Route::get('/admin_test', 'TestController@index');
	Route::post('/admin_test', 'TestController@store');
	Route::post('/test_upload_one', 'TestController@store_one');
});
