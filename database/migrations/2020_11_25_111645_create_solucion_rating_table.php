<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion_rating', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating');
            // $table->boolean('estado')->default(TRUE)->comment('Publico-1/Privado-0');
            $table->unsignedBigInteger('solucion_id');
            $table->foreign('solucion_id')
                ->references('id')
                ->on('soluciones')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solucion_rating');
    }
}
