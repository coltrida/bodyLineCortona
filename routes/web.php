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
Route::get('/agenda/{corso}',  'CorsiController@info')->name('corso.info');

//-----------Agenda Controller---------------------------
Route::get('/agenda',  'AgendaController@estrai')->name('agenda');

//-----------Staff Controller---------------------------
Route::get('/staff', 'StaffController@index')->name('staff.lista');
Route::get('/staff/{staff}',  'StaffController@infostaff')->name('staff.info');

//-----------Listino Controller---------------------------
Route::get('/listino', 'ListinoController@index')->name('listino.info');
Route::get('/listino/edit', 'ListinoController@modificalistino')->name('listino.modifica');
Route::patch('/listino', 'ListinoController@salvalistino')->name('listino.patch');
Route::delete('/listino/{listino}', 'ListinoController@delete')->name('listino.delete');

Auth::routes();





