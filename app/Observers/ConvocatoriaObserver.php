<?php

namespace App\Observers;
use App\Models\Convocatoria;
use Auth;

class ConvocatoriaObserver
{
    //
    /**
     * Handle the evento "created" event.
     *
     * @param  \App\Models\Evento  $evento
     * @return void
     */
    public function creating(Convocatoria $convocatoria)
    {
        $convocatoria->user_id = Auth::user()->id;
    }
    public function created(Convocatoria $convocatoria)
    {
        //
    }

    /**
     * Handle the evento "updated" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function updated(Convocatoria $convocatoria)
    {
        //
    }

    /**
     * Handle the evento "deleted" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function deleted(Convocatoria $convocatoria)
    {
        //
    }

    /**
     * Handle the evento "restored" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function restored(Convocatoria $convocatoria)
    {
        //
    }

    /**
     * Handle the evento "force deleted" event.
     *
     * @param  \App\Evento  $evento
     * @return void
     */
    public function forceDeleted(Convocatoria $convocatoria)
    {
        //
    }
}
