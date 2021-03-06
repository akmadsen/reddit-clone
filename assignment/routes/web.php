<?php

/**
 * Edited this file for routes
 * 
 * @author Alex Madsen
 * @date November 5, 2018
 */

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

Route::get('/', 'FeedController@index');

Route::get('/u/{handle}', 'ProfileController@index'); 
Route::get('/edit_profile', 'ProfileController@edit');
Route::post('/edit_profile', 'ProfileController@update'); 

Route::get('/r/{handle}', 'SubredditController@index'); 

Route::get('/post/r/{handle}', 'PostController@index'); 
Route::post('/post/r/{handle}', 'PostController@update'); 

Route::post('/upvote/{id}', 'VotesController@upVote'); 
Route::post('/downvote/{id}', 'VotesController@downVote'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
