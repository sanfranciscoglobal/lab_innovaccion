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
        TipoInstitucion::create(array('descripcion' => 'Empresa privada'));
        TipoInstitucion::create(array('descripcion' => 'Co-working'));
        TipoInstitucion::create(array('descripcion' => 'Red emprendimiento'));
    }
}
