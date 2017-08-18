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

Route::get('/', 'TeamsController@index');
Route::get('/teams/create', 'TeamsController@create');
Route::get('/teams/{id}', 'TeamsController@show');
Route::post('/teams', 'TeamsController@store');
Route::get('/players/create', 'PlayersController@create');
Route::post('/players', 'PlayersController@store');
Route::get('/players/{id}', 'PlayersController@show');
Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store');
Route::get('/login','LoginController@create')->name('login');
Route::post('/login','LoginController@store');
Route::get('/logout', 'LoginController@destroy');
Route::post('/teams/{id}/comment', 'CommentsController@store');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show');





