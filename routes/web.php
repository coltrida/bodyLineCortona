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



/*Route::get('/storia', function () {
    return view('storia');
});*/

//-----------Home Controller---------------------------
Route::get('/', 'CorsiController@home')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

//-----------Corsi Controller---------------------------
Route::get('/storia', 'CorsiController@storia')->name('storia');
Route::get('/agenda/{corso}',  'CorsiController@info')->name('info.corso');

//-----------Agenda Controller---------------------------
Route::get('/agenda',  'AgendaController@estrai')->name('agenda');

//-----------Staff Controller---------------------------
Route::get('/staff', 'StaffController@index')->name('lista.staff');
Route::get('/staff/{staff}',  'StaffController@infostaff')->name('info.staff');

//-----------Listino Controller---------------------------
Route::get('/listino', 'ListinoController@index')->name('info.listino');

Auth::routes();





