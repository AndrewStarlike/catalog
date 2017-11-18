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

Route::get('disciplines', 'DisciplineController@index');
Route::get('disciplines/{discipline}', 'DisciplineController@show');
Route::post('disciplines', 'DisciplineController@store');
Route::put('disciplines/{discipline}', 'DisciplineController@update');
Route::delete('disciplines/{discipline}', 'DisciplineController@delete');