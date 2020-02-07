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

Route::middleware('auth:api')->get('/aaa', function (Request $request) {
    return "fdfsdfd";
});

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

//Route::group(['middleware' => 'auth:api'], function (Request $request) {
//    Route::get('/home', 'HomeController@index')->name('home');
//});
