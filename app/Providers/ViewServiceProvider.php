<?php

namespace App\Providers;
use App\Models\Solicitud;
use App\Models\Persona;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
     * @return void
     */
    public function boot()
    {
        View::composer(['tramites.fields'], function ($view) {
            $solicitudItems = Solicitud::pluck('id')->toArray();
            $view->with('solicitudItems', $solicitudItems);
        });
        View::composer(['solicituds.fields'], function ($view) {
            $personaItems = Persona::pluck('id')->toArray();
            $view->with('personaItems', $personaItems);
        });
        View::composer(['solicituds.fields'], function ($view) {
            $personaItems = Persona::pluck('id')->toArray();
            $view->with('personaItems', $personaItems);
        });
        View::composer(['solicituds.fields'], function ($view) {
            $personaItems = Persona::pluck('id')->toArray();
            $view->with('personaItems', $personaItems);
        });
        //
    }
}