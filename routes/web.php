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

Route::resource('problems','ProblemsController')->middleware('auth');
Auth::routes();
Route::resource('calls','CallsController')->middleware('auth');
Route::resource('tools','ToolsController')->middleware('auth');
Route::resource('searchs','SearchsController')->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');


//  search route
 Route::get('/search/{query}', 'SearchController@filter')->middleware('auth');

//completed problems
Route::get('/completed', 'SearchController@completedProblems')->middleware('auth');

Route::get('/mytask', 'SearchController@task')->middleware('auth');