<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Get all the objects in the DB
Route::get('songs', 'SongController@getAllSongs');
//Get a certain record from DB
Route::get('songs/{id}','SongController@getSong');
//Post new Record to DB
Route::post('songs','SongsController@createSong');
//Update DB with new values
Route::put('songs/{id}','SongController@updateSong');
//Delete DB with certain values
Route::delete('songs/{id}','SongController@deleteSong');
