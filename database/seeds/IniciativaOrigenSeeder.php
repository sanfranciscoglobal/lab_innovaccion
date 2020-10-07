<?php

use Illuminate\Database\Seeder;
use App\Models\IniciativaOrigen;
class IniciativaOrigenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "ALTER SEQUENCE iniciativa_origen_id_seq RESTART WITH 1;";
        $sql .= "TRUNCATE iniciativa_origen CASCADE;";
        DB::connection()->getPdo()->exec($sql);

        // Añadimos una entrada a esta tabla
        IniciativaOrigen::create([
            'descripcion' => 'Esta iniciativa pertenece a una organización',
            'formularios' => 'ACTOR|INFORMACION|CONTACTO'
        ]);

        IniciativaOrigen::create([
            'descripcion' => 'Esta iniciativa es un esfuerzo individual',
            'formularios' => 'INFORMACION|CONTACTO'
        ]);
    }
}
