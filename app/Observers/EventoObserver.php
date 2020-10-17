<?php

namespace App\Observers;

use App\Models\Evento;
use Auth;

class EventoObserver
{
    /**
     * Handle the evento "created" event.
     *
     * @param  \App\Models\Evento  $evento
     * @return void
     */
    public function creating(Evento $evento)
    {
        $evento->user_id = Auth::user()->id;
    }
    public function created(Evento $evento)
    {
        //
    }

    /**
     * Handle the evento "updated" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function updated(Evento $evento)
    {
        //
    }

    /**
     * Handle the evento "deleted" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function deleted(Evento $evento)
    {
        //
    }

    /**
     * Handle the evento "restored" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function restored(Evento $evento)
    {
        //
    }

    /**
     * Handle the evento "force deleted" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function forceDeleted(Evento $evento)
    {
        //
    }
}
