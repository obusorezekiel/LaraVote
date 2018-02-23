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


Route::get('/', 'VoterController@index');
Route::get('/vote', 'VoterController@create');
Route::post('/vote', 'VoterController@store');

Route::get('/admin', function () {
    return view('admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
