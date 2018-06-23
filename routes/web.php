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
use App\Mail\TestEmail;

Route::get('/', 'NewsController@home')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/personal', 'staff.personal')->name('personal');
Route::view('/storia', 'storia')->name('storia');
Route::view('/cookie', 'cookie')->name('cookie');

//-----------Corsi Controller---------------------------
Route::get('/agenda/{corso}',  'CorsiController@info')->name('corso.info');
Route::delete('/agenda/{corso}',  'CorsiController@elimina')->name('corso.delete');
Route::get('/corsoinserisci',  'CorsiController@inserisci')->name('corso.inserisci');
Route::post('/corsoinserisci/aggiungi', 'CorsiController@salva')->name('corso.salva');
Route::get('/agendagestisci/eliminacorso',  'CorsiController@lista')->name('corso.lista');
Route::get('/agendagestisci/modificacorso',  'CorsiController@modifica')->name('corso.modifica');
Route::get('/seleziona/{id}',  'CorsiController@selezionafromid')->name('corso.seleziona');
Route::patch('/agendagestisci/modificacorso', 'CorsiController@salvamodifica')->name('corso.patch');

//-----------Agenda Controller---------------------------
Route::get('/agenda',  'AgendaController@estrai')->name('agenda');
Route::get('/pdf',  'AgendaController@stampa')->name('pdf');
Route::get('/agendagestisci',  'AgendaController@gestisci')->name('agenda.modifica');
Route::post('/agendagestisci/inserisci',  'AgendaController@inserisci')->name('agenda.inserisci');
Route::delete('/agendagestisci/{agenda}',  'AgendaController@elimina')->name('agenda.elimina');
Route::get('/agendagestisci/resetta',  'AgendaController@resetta')->name('agenda.resetta');

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

//-----------Listino Controller---------------------------
Route::get('/foto', 'FotoController@index')->name('foto.modifica');
Route::post('/foto/{indice}', 'FotoController@salva')->name('foto.salva');

//-----------Baby Controller---------------------------
Route::get('/baby', 'BabyController@index')->name('baby.visualizza');

Route::post('/send', 'EmailController@send')->name('mail');

Auth::routes();





