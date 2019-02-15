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

Route::get('/search/{from_place}/{to_place}', 'SearchController@index');
Route::get('/admin/create_place', function () {
    return view('pages.admin');
});
Route::get('/admin/update_place', function () {
    return view('pages.update_place');
});
Route::get('/route-list', function () {
    return "Route List";
});
Route::get('/map', function () {
    return "Map View";
});
Route::get('/', function () {
    return view('home');
});
Route::post('/selection', 'SearchController@store');
Route::post('/update', 'SearchController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
