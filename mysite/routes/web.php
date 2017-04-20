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
Route::get('/news_{id}', 'NewsController@show');

Route::get('/photofolders', 'PhotoFolderController@index');
Route::get('/photofolders_{page}', 'PhotoFolderController@show');
Route::get('/photos_{id}', 'PhotoController@show');

Route::get('/videofolders', 'VideoFolderController@index');
Route::get('/videofolders_{page}', 'VideoFolderController@show');
Route::get('/videos_{id}', 'VideoController@show');

Route::get('/events', 'InfoController@show');
Route::get('/congrats', 'InfoController@show');
Route::get('/info', 'InfoController@show');


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

	//PHOTO:
	Route::get('/admin_photogallery', 'PhotoFolderController@showAdmin');
	Route::get('/admin_photofolder_add', function () {
		return view('admin.admin_photofolder_add');
	});
	Route::post('/admin_photofolder_add', 'PhotoFolderController@store');
	Route::get('/admin_photofolder_edit_{id}', 'PhotoFolderController@edit');

	Route::get('/admin_photos_add_{id}', 'PhotoController@add');	
	Route::get('/admin_photo_delete_{id}', 'PhotoController@delete');
	Route::post('/admin_photo_upload', 'PhotoController@store');
	
	
	//VIDEO:
	/*Route::get('/admin_videogallery', function () {
		return view('admin.admin_videogallery');
	});*/
	Route::get('/admin_videogallery', 'VideoFolderController@showAdmin');
	Route::get('/admin_videofolder_add', function () {
		return view('admin.admin_videofolder_add');
	});
	Route::post('/admin_videofolder_add', 'VideoFolderController@store');
	Route::get('/admin_videofolder_edit_{id}', 'VideoFolderController@edit');

	Route::get('/admin_videos_add_{id}', 'VideoController@add');	
	Route::get('/admin_video_delete_{id}', 'VideoController@delete');
	Route::post('/admin_video_upload', 'VideoController@store');
	
	
	//INFO:
	Route::get('/admin_events', 'InfoController@showAdmin');
	Route::get('/admin_congrats', 'InfoController@showAdmin');
	Route::get('/admin_infos', 'InfoController@showAdmin');
	
	Route::get('/admin_infos_add', 'InfoController@addAdmin');
	Route::get('/admin_events_add', 'InfoController@addAdmin');
	Route::get('/admin_congrats_add', 'InfoController@addAdmin');
	
	Route::post('/admin_events_add', 'InfoController@store');
	Route::post('/admin_congrats_add', 'InfoController@store');
	Route::post('/admin_infos_add', 'InfoController@store');

	
	Route::get('/admin_test', function() {
		return view('admin.admin_test');
	});
	Route::get('/admin_test', 'TestController@index');
	Route::post('/admin_test', 'TestController@store');
});
