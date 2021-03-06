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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('register', 'Auth\RegisterController@register');
});

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('movies', 'Api\MovieController@index');
    Route::get('movies/{id}', 'Api\MovieController@show');
    Route::get('genres', 'Api\GenresController@index');
    Route::get('genres/{id}', 'Api\GenresController@show');
    Route::post('movies', 'Api\MovieController@store');
});
