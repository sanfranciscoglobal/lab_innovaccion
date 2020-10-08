<?php

namespace App\Observers;
use App\Models\MaterialAprendizaje;
use Auth;

class MaterialObserver
{
    //
    /**
     * Handle the fondo "creating" event.
     *
     * @param  \App\Models\Fondo  $fondo
     * @return void
     */
    public function creating(MaterialAprendizaje $material)
    {
        $material->user_id = Auth::user()->id;
    }

    /**
     * Handle the fondo "created" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function created(MaterialAprendizaje $material)
    {
        //
    }

    /**
     * Handle the fondo "updated" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function updated(MaterialAprendizaje $material)
    {
        //
    }

    /**
     * Handle the fondo "deleted" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function deleted(MaterialAprendizaje $material)
    {
        //
    }

    /**
     * Handle the fondo "restored" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function restored(MaterialAprendizaje $material)
    {
        //
    }

    /**
     * Handle the fondo "force deleted" event.
     *
     * @param  \App\Fondo  $fondo
     * @return void
     */
    public function forceDeleted(MaterialAprendizaje $material)
    {
        //
    }
}
