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

Route::get('/', 'RouteController@index');
Route::get('/search', 'RouteController@search');

Route::get('/login', 'AdminController@loginAPI');


Route::group(['middleware' => ['login']], function () {
    Route::get('/place/insert', 'AdminController@createPlace');
    Route::get('/place', 'AdminController@place');
    Route::get('/place/delete/{id}', 'AdminController@deletePlace');

    Route::post('/post/place/', 'AdminController@addPlace');
});

Route::get('/logout/token/{token}', 'AdminController@logout');
Route::post('/auth/loginAPI', 'AdminController@Login');
