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

Route::get('/', function () {
    return view('welcome');
});

//Head coach views:

Route::get('/main_panel', function () {
    return view('main_panel');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/applications', function () {
    return view('applications');
});

// соревнования:
Route::get('/add_competition', function () {
    return view('add_competition');
});
Route::post('/add_competition', 'CompetitionController@add');
Route::get('/competitions', 'CompetitionController@show');
Route::get('/competition_{id}', 'CompetitionController@edit')->name('CompetitionShow');

Route::get('/competition', 'CompetitionController@show_main_data');


Route::get('/edit_competition', 'CompetitionController@edit_competition');
Route::post('/edit_competition', 'CompetitionController@edit');
Route::post('/update_competition', 'CompetitionController@update');
Route::get('/get_back', 'CompetitionController@back');

// группы:
Route::get('/add_group', function () {
    return view('add_group');
});
Route::post('/add_group', 'GroupController@add');
Route::get('/groups', 'GroupController@show');
Route::get('/edit_group_{id}', 'GroupController@edit')->name('editGroup');
Route::post('/edit_group', 'GroupController@update');
Route::get('/back_to_groups', 'GroupController@back');
Route::delete('/group_delete_{group}', 'GroupController@delete')->name('groupDelete');

// категории:
Route::get('/add_category', function () {
    return view('add_category');
});
Route::post('/add_category', 'CategoryController@add');
Route::get('/category_group_{id}', 'CategoryController@show')->name('categoryGroup');
Route::get('/edit_category_{id}', 'CategoryController@edit')->name('editCategory');
Route::post('/update_category', 'CategoryController@update'); 
Route::delete('/category_delete_{category}', 'CategoryController@delete')->name('categoryDelete');

//заявки:
Route::get('/application_teams', 'ApplicationController@show');

//Route::get('/application_teams', '');



