<?php

namespace App\Observers;

use App\Models\Fondo;
use Auth;

class FondoObserver
{
    /**
     * Handle the fondo "creating" event.
     *
     * @param  \App\Models\Fondo  $fondo
     * @return void
     */
    public function creating(Fondo $fondo)
    {
        $fondo->user_id = Auth::user()->id;
    }

    /**
     * Handle the fondo "created" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function created(Fondo $fondo)
    {
        //
    }

    /**
     * Handle the fondo "updated" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function updated(Fondo $fondo)
    {
        //
    }

    /**
     * Handle the fondo "deleted" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function deleted(Fondo $fondo)
    {
        //
    }

    /**
     * Handle the fondo "restored" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function restored(Fondo $fondo)
    {
        //
    }

    /**
     * Handle the fondo "force deleted" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function forceDeleted(Fondo $fondo)
    {
        //
    }
}
