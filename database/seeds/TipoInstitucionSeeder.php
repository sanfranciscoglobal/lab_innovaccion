<?php

use Illuminate\Database\Seeder;
use App\Models\TipoInstitucion;
class TipoInstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE tipo_institucion_id_seq RESTART WITH 1;";
        $sql .= "TRUNCATE tipo_institucion CASCADE;";
        DB::connection()->getPdo()->exec($sql);

        // Añadimos una entrada a esta tabla
        TipoInstitucion::create(array('descripcion' => 'Academia'));
        TipoInstitucion::create(array('descripcion' => 'Aceleradora/ Incubadora'));
        TipoInstitucion::create(array('descripcion' => 'Cooperación internacional'));
        TipoInstitucion::create(array('descripcion' => 'Coworking / Incubadora'));
        TipoInstitucion::create(array('descripcion' => 'Empresa social / Start up'));
        TipoInstitucion::create(array('descripcion' => 'Iniciativa ciudadana (Pg web, logo, redes sociales opcional)'));
        TipoInstitucion::create(array('descripcion' => 'Iniciativas Municipales / Gobierno'));
        TipoInstitucion::create(array('descripcion' => 'Juntas/Asociaciones de vecinos (Pg web, logo, redes sociales opcional)'));
        TipoInstitucion::create(array('descripcion' => 'Laboratorio'));
        TipoInstitucion::create(array('descripcion' => 'ONG/Fundaciones'));
        TipoInstitucion::create(array('descripcion' => 'Red Académica'));
        TipoInstitucion::create(array('descripcion' => 'Red Corporativa (Pg web, logo, redes sociales opcional)'));
        TipoInstitucion::create(array('descripcion' => 'Red Emprendimiento'));
        TipoInstitucion::create(array('descripcion' => 'Sociedad civil organizada (Pg web, logo, redes sociales opcional)'));
    }
}
