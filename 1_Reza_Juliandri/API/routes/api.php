<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\AuthController@login');
// Route::get('login', 'API\AuthController@login');
// Auth required
Route::middleware('token_check')
    ->group(function(){
        // Auth
        Route::any('logout', 'API\AuthController@logout');

        // Place
        Route::get('place', 'API\PlaceController@all');
        Route::get('place/{id}', 'API\PlaceController@search');

        // Schedule
        Route::get('/route/search/{from}/{to}/{time?}', 'API\RouteController@index');

        // Route
        Route::post('/route/selection', 'API\RouteController@insert');
    });

// Admin Permission
Route::middleware('admin_check')
    ->group(function(){
        // Place
        Route::post('place', 'API\PlaceController@insert');
        Route::post('place/{id}', 'API\PlaceController@update');
        Route::delete('place/{id}', 'API\PlaceController@delete');

        // Schedule
        Route::post('schedule', 'API\ScheduleController@insert');
        Route::delete('schedule/{id}', 'API\ScheduleController@delete');
    });

Route::fallback(function(){
    return response()
        ->json([
            'messages'=> 'Path not found'
        ], 404);
});