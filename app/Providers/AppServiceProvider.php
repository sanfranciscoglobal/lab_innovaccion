<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Models
use App\Models\Fondo;
use App\Models\Evento;

// Observers
use App\Observers\FondoObserver;
use App\Observers\EventoObserver;

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
     * @return void
     */
    public function boot()
    {
        Fondo::observe(FondoObserver::class);
        Evento::observe(EventoObserver::class);
    }
}
