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

Route::get('/photos_{id}', 'PhotoController@show');

//Route::get('/photo_{id}', 'PhotoController@showItem');



