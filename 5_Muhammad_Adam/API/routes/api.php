<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Token;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/v1/auth/login', 'UserController@login');
Route::get('/v1/auth/logout', 'UserController@logout');

Route::group(['middleware' => ['Token']], function () {
    
    Route::group(['middleware' => ['role']], function () {
        Route::post('/v1/place/post', 'PlaceController@store');
        Route::post('/v1/place/{id}', 'PlaceController@update');
        Route::post('/v1/schedule/', 'SchedulesController@store');
        Route::delete('/v1/place/{id}/destroy', 'PlaceController@destroy');
        Route::delete('/v1/schedule/{id}', 'SchedulesController@destroy');
    });
});

    Route::get('/v1/place/{id}', 'PlaceController@show'); 
    Route::get('/v1/route/search/{fpi}/{tpi}/', 'RouteController@search');
    Route::get('/v1/place', 'PlaceController@index');