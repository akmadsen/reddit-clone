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

// Says "At index, goto TweetsControler and execute 'index()' action 
Route::get('/', 'TweetsController@index');
Route::get('/demo', 'TweetsController@demo'); 
Route::get('/contact', 'ContactController@index'); 

// Put these lower, otherwise will overwrite (match to) __any__ other routes
Route::get('/{id}', 'TweetsController@index'); 