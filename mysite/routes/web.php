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
    return view('main');
});

Route::get('/news', 'NewsController@index');
Route::get('/news_{id}', 'NewsController@show');

Route::get('/photofolders', 'PhotoFolderController@index');

Route::get('/photofolders_{page}', 'PhotoFolderController@show');


//Route::get('/photos_{id}', 'PhotoController@show');

Route::get('/photos_test_{id}', 'PhotoController@show');

Route::get('/test', function () {
    return view('test_git');
});
