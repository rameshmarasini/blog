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
Route::get('about','PagesController@getabout');
Route::get('contact','PagesController@getcontact'); 

Route::get('/','PagesController@getindex');

Route::resource('Posts','PostController');

