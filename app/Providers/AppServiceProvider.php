<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Models
use App\Models\Fondo;
use App\Models\Evento;
use App\Models\MaterialAprendizaje;
use App\Models\Convocatoria;

// Observers
use App\Observers\FondoObserver;
use App\Observers\EventoObserver;
use App\Observers\MaterialObserver;
use App\Observers\ConvocatoriaObserver;

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
        MaterialAprendizaje::observe(MaterialObserver::class);
        Convocatoria::observe(ConvocatoriaObserver::class);
    }
}
