<?php

/**
 * Edited this file for routes
 * 
 * @author Alex Madsen
 * @date October 30, 2018
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
