<?php

use Illuminate\Database\Seeder;
use App\Models\EstadoRegistro;
use Illuminate\Support\Facades\DB;
class EstadoRegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE estado_registro_id_seq RESTART WITH 1;";
        $sql .= "TRUNCATE estado_registro CASCADE;";
        DB::connection()->getPdo()->exec($sql);

        // Añadimos una entrada a esta tabla
        EstadoRegistro::create(array('nombre' => 'En Revisión', 'color' => 'warning', 'codigo' => 'RE'));
        EstadoRegistro::create(array('nombre' => 'Aprobado', 'color' => 'success', 'codigo' => 'AP'));
        EstadoRegistro::create(array('nombre' => 'No Aprobado', 'color' => 'danger', 'codigo' => 'NP'));

        //Estados Activos / Inactivos
        EstadoRegistro::create(array('nombre' => 'Activo', 'color' => 'danger', 'codigo' => 'AC'));
        EstadoRegistro::create(array('nombre' => 'Inactivo', 'color' => 'danger', 'codigo' => 'IN'));

    }
}
