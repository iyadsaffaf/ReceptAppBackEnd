<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|t
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',


]
, function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('user/{id}', 'user@userByID');
    Route::put('user/{user}', 'user@update');

    Route::post('favourite', 'fovouriteController@save');
    Route::delete('favourite/{favourite}', 'fovouriteController@delete');
    Route::get('favourite', 'fovouriteController@getAll');


    Route::post('signup', 'AuthController@signup');
    Route::get('recept', 'ReceptController@recepts');
    Route::post('receptsave', 'ReceptController@save');
    Route::put('recept/{recept}', 'ReceptController@update');
    Route::delete('recept/{recept}', 'ReceptController@delete');
    Route::apiResource('recepsts', 'ReceptController@recepts');
    Route::get('file', 'FileController@photo');
    Route::get('file/', 'FileController@photoByName');
    Route::post('fileupload', 'FileController@photoSave');




    });

