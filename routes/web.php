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

Route::post('/cats/vote', 'CatController@vote');
Route::get('/', 'CatController@home');
Route::get('/cats', 'CatController@index');
Auth::routes();