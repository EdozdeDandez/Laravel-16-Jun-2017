<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks-page', 'MyTasksController@index')->name('task');
Route::get('/tasks-page/my', 'MyTasksController@show')->name('mine');
Route::resource('/tasks', 'TasksController');

Auth::routes();