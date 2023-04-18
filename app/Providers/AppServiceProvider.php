<?php

namespace App\Providers;

use App\Services\HourService;
use App\Services\PostService;
use App\Services\TrainerService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @param TrainerService $trainerService
     * @param HourService $hourService
     * @param PostService $postService
     * @return void
     */
    public function boot(TrainerService $trainerService, HourService $hourService, PostService $postService)
    {
        view()->composer('*', function ($view) use ($trainerService, $hourService, $postService)
        {
            $trainers = $trainerService->index();
            $orario = $hourService->index();
            $inEvidenza = $postService->inEvidenza();
            $view->with('trainers', $trainers)->with('orario', $orario)->with('inEvidenza', $inEvidenza);
        });
    }
}
