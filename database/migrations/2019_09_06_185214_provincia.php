<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Provincia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('provincia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('region');
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
        //
        Schema::dropIfExists('provincia');
    }
}

// INSERT INTO `provincia` (`id`, `nombre`,`region`) VALUES
// (01,'Azuay','Sierra'),
// (02,'Bolivar','Sierra'),
// (03,'Cañar','Sierra'),
// (04,'Carchi','Sierra'),
// (05,'Cotopaxi','Sierra'),
// (06,'Chimborazo','Sierra'),
// (07,'El Oro','Costa'),
// (08,'Esmeraldas','Costa'),
// (09,'Guayas','Costa'),
// (10,'Imbabura','Sierra'),
// (11,'Loja','Sierra'),
// (12,'Los Rios','Costa'),
// (13,'Manabi','Costa'),
// (14,'Morona Santiago','Amazónica'),
// (15,'Napo','Amazónica'),
// (16,'Pastaza','Amazónica'),
// (17,'Pichincha','Sierra'),
// (18,'Tungurahua','Sierra'),
// (19,'Zamora Chinchipe','Amazónica'),
// (20,'Galapagos','Galápagos'),
// (21,'Sucumbios','Amazónica'),
// (22,'Orellana','Amazónica'),
// (23,'Santo Domingo De Los Tsáchilas','Sierra'),
// (24,'Santa Elena','Costa'),
// (25,'Nacional','Nacional');
