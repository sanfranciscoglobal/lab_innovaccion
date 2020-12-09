<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('organizador');
            $table->date('fecha');
            $table->time('hora');
            $table->string('imagen');
            $table->text('descripcion')->nullable();
            $table->boolean('tipo')->comment('Presencial-1/Virtual-0'); 
            $table->string('canton')->nullable();
            $table->string('area1')->nullable();
            $table->string('area2')->nullable();
            $table->string('sitioweb')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('org_lat')->nullable();
            $table->string('org_long')->nullable();
            $table->text('url')->nullable();
            $table->boolean('estado')->default(TRUE)->comment('Publico-1/Privado-0');                     
            $table->boolean('terminos');
            $table->foreignId('user_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
