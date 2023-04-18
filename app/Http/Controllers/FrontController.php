<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use App\Services\HourService;
use App\Services\PhotoService;
use App\Services\PostService;
use App\Services\TrainerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use function compact;
use function view;

class FrontController extends Controller
{
    public function landing(PostService $postService)
    {
        if (count($postService->hasLanding()) > 0) {
            return view('landing', [
                'post' => $postService->hasLanding()->first()
            ]);
        } else {
            return Redirect::route('inizio');
        }
    }

    public function index(PostService $postService, PhotoService $photoService)
    {
        $ultimeNotizie = $postService->ultimeQuattro();
        $photosPrimo = $photoService->activities(1);
        $photosSecondo = $photoService->activities(2);
        $photosTerzo = $photoService->activities(3);
        $photosQuarto = $photoService->activities(4);
        $photosQuinto = $photoService->activities(5);
        $photosSesto = $photoService->activities(6);
        $photosSettimo = $photoService->activities(7);
        $photosOttavo= $photoService->activities(8);
        return view('inizio', compact('ultimeNotizie',
            'photosPrimo', 'photosSecondo', 'photosTerzo', 'photosQuarto', 'photosQuinto',
                'photosSesto', 'photosSettimo', 'photosOttavo'));
    }

    public function calendario(CourseService $courseService)
    {
        $courses = $courseService->listaCorsiConCalendario();
        return view('calendario', compact('courses'));
    }

    public function about(PhotoService $photoService)
    {
        $photosPrimo = $photoService->activities(1);
        $photosSecondo = $photoService->activities(2);
        $photosTerzo = $photoService->activities(3);
        $photosQuarto = $photoService->activities(4);
        $photosQuinto = $photoService->activities(5);
        $photosSesto = $photoService->activities(6);
        $photosSettimo = $photoService->activities(7);
        $photosOttavo= $photoService->activities(8);
        return view('about', compact('photosPrimo', 'photosSecondo', 'photosTerzo', 'photosQuarto', 'photosQuinto',
            'photosSesto', 'photosSettimo', 'photosOttavo'));
    }

    public function notizie(PostService $postService)
    {
        $inEvidenza = $postService->inEvidenza();
        $posts = $postService->lista();
        return view('posts', compact('inEvidenza', 'posts'));
    }

    public function notizia($id, PostService $postService)
    {
        $inEvidenza = $postService->inEvidenza();
        $post = $postService->show($id);
        return view('post', compact('inEvidenza', 'post'));
    }
}
