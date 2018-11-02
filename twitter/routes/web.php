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

// In real world, of ten send to splash screen at '/' 
// Route::get('/', 'TweetsController@splash'); 
Route::get('/', 'TweetsController@index');
Route::get('/demo', 'TweetsController@demo'); 
Route::get('/contact', 'ContactController@index'); 

// Auth Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index'); 

// Put these lower, otherwise will overwrite (match to) __any__ other routes
Route::get('/{id}', 'TweetsController@index'); 