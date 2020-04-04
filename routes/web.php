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
Route::get('tasks','TasksController@index');
Route::get('tasks/{task}','TasksController@show');

//Display create form
Route::get('new-task','TasksController@create');

//store information to database
Route::post('store-tasks','TasksController@store');

Route::get('tasks/{task}/edit','TasksController@edit');

Route::post('tasks/{task}/update-tasks','TasksController@update');

Route::get('/tasks/{task}/delete', 'TasksController@destroy');
