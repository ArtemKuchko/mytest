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
Route::get('/congratulations', 'InfoController@show');
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

	Route::get('/admin_news', 'NewsController@showAdmin');
	
	Route::get('/admin_news_add', function () {
		return view('admin.admin_news_add');
	});
	
	Route::post('/admin_news_add', 'NewsController@store');

	Route::get('/admin_photogallery', 'PhotoFolderController@showAdmin');

	Route::get('/admin_photofolder_add', function () {
		return view('admin.admin_photofolder_add');
	});

	Route::post('/admin_photofolder_add', 'PhotoFolderController@store');

	Route::get('/admin_photofolder_edit_{id}', 'PhotoFolderController@edit');

	Route::get('/admin_videogallery', function () {
		return view('admin.admin_videogallery');
	});
	Route::get('/admin_events', function () {
		return view('admin.admin_events');
	});
	Route::get('/admin_congrats', function () {
		return view('admin.admin_congrats');
	});
	Route::get('/admin_infos', function () {
		return view('admin.admin_infos');
	});

	Route::get('/admin_test', function() {
		return view('admin.admin_test');
	});

	Route::post('/file_upload', 'TestController@store');
	

});
