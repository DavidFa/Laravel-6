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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::group(['middleware' => ['auth', 'permission']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user', 'UserController@getUser');
});

//Route::middleware(['web'])->group(function() {
//    Route::get('/user', function (Request $request) {
//        return Auth::user();
//    });
//});


//Route::group(['middleware' => ['web']], function () {
//    Route::get('/user', function (Request $request) {
//        return Auth::user();
//    });
//});


