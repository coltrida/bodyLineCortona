<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalendarRequest;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\TrainserRequest;
use App\Services\CalendarService;
use App\Services\CourseService;
use App\Services\HourService;
use App\Services\PhotoService;
use App\Services\PostService;
use App\Services\TrainerService;
use Illuminate\Http\Request;
use function compact;
use function dd;
use function redirect;
use function view;

class AuthController extends Controller
{
    public function index()
    {
        return view('adminPanel.index');
    }

    public function courses(CourseService $courseService, TrainerService $trainerService)
    {
        $courses = $courseService->listaCorsiConTrainer();
        $trainers = $trainerService->index();
        return view('adminPanel.corsi', compact('courses', 'trainers'));
    }

    public function courseDelete($id, CourseService $courseService)
    {
        $courseService->elimina($id);
        return redirect()->back();
    }

    public function courseAdd(CourseRequest $request, CourseService $courseService)
    {
        $courseService->aggiungi($request);
        return redirect()->back();
    }

    public function trainers(TrainerService $trainerService)
    {
        $trainers = $trainerService->index();
        return view('adminPanel.trainers', compact('trainers'));
    }

    public function trainersDelete($id, TrainerService $trainerService)
    {
        $trainerService->elimina($id);
        return redirect()->back();
    }

    public function trainersAdd(TrainserRequest $request, TrainerService $trainerService)
    {
        $trainerService->aggiungi($request);
        return redirect()->back();
    }

    public function calendar(CalendarService $calendarService, CourseService $courseService)
    {
        $calendars = $calendarService->index();
        $courses = $courseService->index();
        return view('adminPanel.calendar', compact('calendars', 'courses'));
    }

    public function calendarDelete($id, CalendarService $calendarService)
    {
        $calendarService->elimina($id);
        return redirect()->back();
    }

    public function calendarAdd(CalendarRequest $request, CalendarService $calendarService)
    {
        $calendarService->aggiungi($request);
        return redirect()->back();
    }

    public function photosMain(PhotoService $photoService)
    {
        $photos = $photoService->firstMain();
        $slotDisponibili = $photoService->slotDisponibili('main');
        $nomeSezione = 'Slide Principale';
        return view('adminPanel.photos', compact('photos', 'slotDisponibili', 'nomeSezione'));
    }

    public function photosSecond(PhotoService $photoService)
    {
        $photos = $photoService->secondMain();
        $slotDisponibili = $photoService->slotDisponibili('second');
        $nomeSezione = 'Slide Secondario';
        return view('adminPanel.photos', compact('photos', 'slotDisponibili', 'nomeSezione'));
    }

    public function photosActivities($numero, PhotoService $photoService)
    {
        $photos = $photoService->activities($numero);
        $slotDisponibili = $photoService->slotDisponibili($numero);
        $nomeSezione = 'Attività sezione '.$numero;
        return view('adminPanel.photos', compact('photos', 'slotDisponibili', 'nomeSezione'));
    }

    public function photoAdd(Request $request, PhotoService $photoService)
    {
        $photoService->aggiungi($request);
        return redirect()->back();
    }

    public function houres(HourService $hourService)
    {
        $orario = $hourService->index();
        return view('adminPanel.orario', compact('orario'));
    }

    public function houreEdit(Request $request, HourService $hourService)
    {
        $hourService->edit($request);
        return redirect()->back();
    }

    public function posts(PostService $postService)
    {
        $postsNonInEvidenza = $postService->nonInEvidenza();
        $postsInEvidenza = $postService->inEvidenza();
        return view('adminPanel.notizie', compact('postsNonInEvidenza', 'postsInEvidenza'));
    }

    public function postDelete($id, PostService $postService)
    {
        $postService->elimina($id);
        return redirect()->back();
    }

    public function postShow($id, PostService $postService)
    {
        $postService->show($id);
        return redirect()->back();
    }

    public function postAdd(Request $request, PostService $postService)
    {
        $postService->aggiungi($request);
        return redirect()->back();
    }

    public function postEvidenza($id, PostService $postService)
    {
        $postService->evidenza($id);
        return redirect()->back();
    }

    public function postLanding($id, PostService $postService)
    {
        $postService->landing($id);
        return redirect()->back();
    }
}
