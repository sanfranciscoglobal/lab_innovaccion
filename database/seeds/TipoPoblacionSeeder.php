<?php

use Illuminate\Database\Seeder;
use App\Models\TipoPoblacion;

class TipoPoblacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE tipo_poblacion_id_seq RESTART WITH 1;";
        $sql .= "TRUNCATE tipo_poblacion CASCADE;";
        DB::connection()->getPdo()->exec($sql);

        TipoPoblacion::create(array('descripcion' => 'Ciudadanía en general'));
        TipoPoblacion::create(array('descripcion' => 'Emprendedores'));
        TipoPoblacion::create(array('descripcion' => 'Mujeres'));
    }
}
