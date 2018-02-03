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

Route::get('/', function () {
    return view('welcome')->with('users');
});

Route::prefix('api')->group(function() {
    Route::resource('environment', 'EnvironmentController');
});

Route::get('/profile', function () {
    return view('welcome')->with('users');
});
Route::get('/help', function () {
    return view('welcome')->with('users');
});
Route::get('/library', function () {
    return view('welcome')->with('users');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
