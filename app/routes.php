<?php

Route::get('/', ['as' => 'home', 'uses' => 'LinksController@create']);
Route::get('/info', 'BaseController@information');
Route::get('/contact', 'BaseController@contact');
Route::post('links', 'LinksController@store');
Route::get('{hash}', 'LinksController@processHash');
Route::get('{hash}/info', 'LinksController@info');
