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
Route::get('/applications', function () {
    return view('applications');
});
Route::get('/application_teams', 'ApplicationController@show');
Route::post('/application_teams', 'ApplicationController@chooseTeam');

Route::get('/application_groups', 'ApplicationController@showGroup');
Route::post('/application_groups', 'ApplicationController@chooseGroup');
Route::get('/application_category_{id}', 'ApplicationController@chooseCategory')->name('applicationCategory');

//взвешивание:
Route::get('/weighing', function() {
   return view('weighing.weighing');
});

Route::get('/weighing_teams', 'WeighingController@show');
Route::post('/weighing_teams', 'WeighingController@chooseTeam');
Route::get('/search_profile', 'WeighingController@chooseSearch');
Route::post('/real_weight', 'WeighingController@realWeight')->name('realWeight');


//жеребьевка:
/*Route::get('/grid', function (){
   return view('grid.grid');
});
*/
Route::get('/test', function (){
    return view('test');
});
//Route::resource('grids', 'GridController');
Route::get('/grids', 'GridController@index');
Route::get('/grids_{id}', 'GridController@show')->name('grids.show');
Route::get('/grid_sort_{id}', 'GridController@edit')->name('gridSort');
