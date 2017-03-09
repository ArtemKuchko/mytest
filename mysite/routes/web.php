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

/*Route::get('/', function () {
    return view('main');
});*/
Route::get('/', 'MainController@index');

Route::get('/news', 'NewsController@index');
Route::get('/news_{id}', 'NewsController@show');

Route::get('/photofolders', 'PhotoFolderController@index');
Route::get('/photofolders_{page}', 'PhotoFolderController@show');
Route::get('/photos_{id}', 'PhotoController@show');

Route::get('/videofolders', 'VideoFolderController@index');
Route::get('/videofolders_{page}', 'VideoFolderController@show');
Route::get('/videos_{id}', 'VideoController@show');

Route::get('/events', 'InfoController@showEvents');
Route::get('/congratulations', 'InfoController@showCongrats');
Route::get('/infos', 'InfoController@showInfos');



Route::get('/test', function () {
    return view('test_git');
});

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

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'admin'], function () {

	Route::get('/admin', function () {
		return view('admin.admin_panel');
	});
	Route::get('/admin_news', function () {
		return view('admin.admin_news');
	});
	Route::get('/admin_photogallery', function () {
		return view('admin.admin_photogallery');
	});
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

});
