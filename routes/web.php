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
    return view('welcome');
});

Route::resource('problems','ProblemsController');
Auth::routes();
Route::resource('calls','CallsController');
Route::resource('tools','ToolsController');
Route::resource('searchs','SearchsController');


Route::get('/home', 'HomeController@index')->name('home');


//  search route
 Route::get('/search/{query}', 'SearchController@filter');

//completed problems
Route::get('/completed', 'SearchController@completedProblems');

Route::get('/mytask', 'SearchController@task');