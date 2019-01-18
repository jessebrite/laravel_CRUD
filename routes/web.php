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

Route::get('/', function () { // facade call
    return view('welcome');
});

// The resource method, when used, binds the route to its
// method name (no @index needed after ProjectController)
Route::resource('/project', 'ProjectController');

Route::get('/{sidenotes}', 'ProjectController@sideNotes')->name('sideNotes.index');

Route::post('/project/{project}/tasks', 'ProjectTasksController@store');

Route::patch('tasks/{task}', 'ProjectTasksController@update');

// Defining route names
// $router->get('/{project}/{create}', 'ProjectController@create');
