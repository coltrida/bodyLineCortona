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
Route::get('/', 'NewsController@home')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

//-----------Corsi Controller---------------------------
Route::get('/storia', 'CorsiController@storia')->name('storia');
Route::get('/agenda/{corso}',  'CorsiController@info')->name('corso.info');
Route::get('/corsoinserisci',  'CorsiController@inserisci')->name('corso.inserisci');
Route::post('/corsoinserisci/aggiungi', 'CorsiController@salva')->name('corso.salva');
Route::get('/agendagestisci/eliminacorso',  'CorsiController@lista')->name('corso.lista');

//-----------Agenda Controller---------------------------
Route::get('/agenda',  'AgendaController@estrai')->name('agenda');
Route::get('/agendagestisci',  'AgendaController@gestisci')->name('agenda.modifica');

//-----------Staff Controller---------------------------
Route::get('/staff', 'StaffController@index')->name('staff.lista');
Route::get('/staff/{staff}',  'StaffController@infostaff')->name('staff.info');
Route::get('/staffgestisci', 'StaffController@gestisci')->name('staff.modifica');
Route::get('/staffgestisci/aggiungi', 'StaffController@aggiungi')->name('staff.aggiungi');
Route::post('/staffgestisci/aggiungi', 'StaffController@salva')->name('staff.salva');
Route::delete('/staffgestisci/{staff}', 'StaffController@elimina')->name('staff.delete');

//-----------Listino Controller---------------------------
Route::get('/listino', 'ListinoController@index')->name('listino.info');
Route::get('/listino/edit', 'ListinoController@modificalistino')->name('listino.modifica');
Route::patch('/listino', 'ListinoController@salvalistino')->name('listino.patch');
Route::delete('/listino/{listino}', 'ListinoController@delete')->name('listino.delete');

//-----------News Controller---------------------------
Route::get('/news', 'NewsController@inserisci')->name('news.inserisci');
Route::post('/news', 'NewsController@salva')->name('news.salva');

Auth::routes();





