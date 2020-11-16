<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soluciones', function (Blueprint $table) {
         
            $table->id();
            $table->unsignedBigInteger('problema_id');
            $table->unsignedBigInteger('sectorsolucion_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->boolean('estado_descrip')->default(FALSE)->comment('Abieta-1/Soloponente-0');    
            $table->string('archivo')->nullable();
            
            $table->unsignedBigInteger('nivelsolucion_id');
            $table->string('concepto1');
            $table->string('concepto2'); 
            $table->string('concepto3');

            $table->string('telefono');
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkededin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->boolean('terminos');
            $table->foreignId('user_id')->constrained();
            $table->foreign('nivelsolucion_id')
                ->references('id')
                ->on('nivel_solucion')
                ->constrained()
                ->onDelete('cascade');
            $table->foreign('sectorsolucion_id')
                ->references('id')
                ->on('sector_solucion')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->foreign('problema_id')
                ->references('id')
                ->on('problemas')
                ->constrained()
                ->onDelete('cascade')
            ;      

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
        Schema::dropIfExists('soluciones');
    }
}
