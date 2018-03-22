<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/data', 'PegawaiController@index');

Route::get('/seleksi', 'PegawaiController@seleksi');
Route::post('/hasil', 'PegawaiController@bobot');
Route::get('/hasil', 'PegawaiController@bobot');
Route::get('/form', 'FormController@index');
Route::get('/daftar', 'FormController@daftar');
Route::post('/daftar', 'FormController@daftar');
