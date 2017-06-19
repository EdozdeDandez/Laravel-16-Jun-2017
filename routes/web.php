<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'TasksController@index')->name('tasks');
Route::post('/tasks','TasksController@store');

Auth::routes();