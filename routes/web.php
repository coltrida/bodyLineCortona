<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'landing'])->name('landing');
Route::get('/home', [FrontController::class, 'index'])->name('inizio');
Route::get('/listino', function (){ return redirect()->route('inizio'); });
Route::get('/storia', function (){ return redirect()->route('inizio'); });
Route::get('/calendario', [FrontController::class, 'calendario'])->name('calendario');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/notizie', [FrontController::class, 'notizie'])->name('notizie');
Route::get('/notizie/{id}', [FrontController::class, 'notizia'])->name('notizia');

Route::get('/migrate', function (){
    Artisan::call('migrate');
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('admin.index');

    /*----------- corsi -------------*/
    Route::get('/courses', [AuthController::class, 'courses'])->name('admin.courses');
    Route::get('courses/elimina/{id}', [AuthController::class, 'courseDelete'])->name('admin.course.delete');
    Route::post('courses/', [AuthController::class, 'courseAdd'])->name('admin.course.add');

    /*----------- trainer -------------*/
    Route::get('/trainers', [AuthController::class, 'trainers'])->name('admin.trainers');
    Route::get('trainers/elimina/{id}', [AuthController::class, 'trainersDelete'])->name('admin.trainer.delete');
    Route::post('trainers/', [AuthController::class, 'trainersAdd'])->name('admin.trainer.add');

    /*----------- orario -------------*/
    Route::get('/houres', [AuthController::class, 'houres'])->name('admin.houres');
    Route::post('houres/modifica', [AuthController::class, 'houreEdit'])->name('admin.hour.edit');

    /*----------- calendar -------------*/
    Route::get('/calendar', [AuthController::class, 'calendar'])->name('admin.calendar');
    Route::get('calendar/elimina/{id}', [AuthController::class, 'calendarDelete'])->name('admin.calendar.delete');
    Route::post('calendar/', [AuthController::class, 'calendarAdd'])->name('admin.calendar.add');

    /*----------- foto -------------*/
    Route::get('/photos/main', [AuthController::class, 'photosMain'])->name('admin.photos.main');
    Route::get('/photos/second', [AuthController::class, 'photosSecond'])->name('admin.photos.second');
    Route::get('/photos/activities/{numero}', [AuthController::class, 'photosActivities'])->name('admin.photos.activities');
    Route::post('photos/', [AuthController::class, 'photoAdd'])->name('admin.photo.add');

    /*----------- post -------------*/
    Route::get('/posts', [AuthController::class, 'posts'])->name('admin.posts');
    Route::get('posts/{id}', [AuthController::class, 'postShow'])->name('admin.post.show');
    Route::get('posts/elimina/{id}', [AuthController::class, 'postDelete'])->name('admin.post.delete');
    Route::post('posts/', [AuthController::class, 'postAdd'])->name('admin.post.add');
    Route::get('posts/evidenza/{id}', [AuthController::class, 'postEvidenza'])->name('admin.post.evidenza');
    Route::get('posts/landing/{id}', [AuthController::class, 'postLanding'])->name('admin.post.landing');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
