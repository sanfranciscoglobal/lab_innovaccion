<?php

use Illuminate\Database\Seeder;
use App\Models\TipoConvocatoria;
use Illuminate\Support\Facades\DB;

class TipoSubConvocatoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $sql  = "ALTER SEQUENCE tipo_convocatoria_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE tipo_convocatoria CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        DB::insert("insert into tipo_convocatoria (id, nombre, created_at, updated_at, deleted_at) values('1','Innovación Abierta',NULL,NULL,NULL);");
        DB::insert("insert into tipo_convocatoria (id, nombre, created_at, updated_at, deleted_at) values('2','Innovación Social',NULL,NULL,NULL);");
        DB::insert("insert into tipo_convocatoria (id, nombre, created_at, updated_at, deleted_at) values('3','Innovación Pública',NULL,NULL,NULL);");
        
    }
}
