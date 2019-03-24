<?php



Route::get('/', 'HomeController@home');
Route::get('/about','HomeController@about');
Route::get('/add','HomeController@add');
Route::post('/store','HomeController@store');