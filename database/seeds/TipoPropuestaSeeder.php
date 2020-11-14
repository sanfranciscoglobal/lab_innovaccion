<?php

use Illuminate\Database\Seeder;
use App\Models\TipoPropuesta;

class TipoPropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "ALTER SEQUENCE tipo_propuestas_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE tipo_propuestas CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        TipoPropuesta::create(['nombre' => 'Innovación de producto o servicio (cuando la propuesta busca el desarrollo de un bien o servicio nuevo o significativamente mejorado en sus características y/o en sus usos posibles)']);
        TipoPropuesta::create(['nombre' => 'Innovación del proceso (cuando la propuesta busca el desarrollo de métodos de gestión nuevos o significativamente mejorados por efecto de mejores técnicas, métodos, equipo o software)']);
        TipoPropuesta::create(['nombre' => 'Innovación de la estructura organizacional (cuando la propuesta busca el desarrollo de nuevos métodos de organización, en las prácticas institucionales, en la planificación y organización del trabajo o a las relaciones de la organización con su entorno)']);
        TipoPropuesta::create(['nombre' => 'Innovación comercial/comunicacional (cuando la propuesta busca el desarrollo de nuevos métodos de comunicación y difusión, mejoras en la imagen organizacional, en su estrategia de posicionamiento o promoción)']);
        
               
    }
}
