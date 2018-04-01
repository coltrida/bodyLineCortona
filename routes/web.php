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

Route::get('/', 'CorsiController@home')->name('index');

/*Route::get('/storia', function () {
    return view('storia');
});*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/storia', 'CorsiController@storia')->name('storia');
Route::get('/agenda',  'AgendaController@estrai')->name('agenda');
Route::get('/agenda/{corso}',  'CorsiController@info')->name('info.corso');

Auth::routes();





