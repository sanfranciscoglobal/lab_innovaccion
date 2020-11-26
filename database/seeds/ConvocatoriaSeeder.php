<?php

use Illuminate\Database\Seeder;
use App\Models\ConvocatoriaODS;
use App\Models\ConvocatoriaSector;
use App\Models\ConvocatoriaSubsector;
use App\Models\Convocatoria;

class ConvocatoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "ALTER SEQUENCE convocatorias_id_seq RESTART WITH 2;";
        $sql .= "TRUNCATE convocatorias CASCADE;";
        DB::connection()->getPdo()->exec($sql);

        DB::insert("insert into convocatorias (id,  user_id, tipoconvocatoria_id, fecha_inicio, fecha_cierre, descripcion,imagen,terminos) 
        values('1','5','1','2020/11/19','2020/12/22','Convocatoia de prueba','imagenprueba.png','1')");


        $sql = "ALTER SEQUENCE convocatorias_ods_id_seq RESTART WITH 2;";
        $sql .= "TRUNCATE convocatorias_ods CASCADE;";
        DB::connection()->getPdo()->exec($sql);
        DB::insert("insert into convocatorias_ods (id, convocatoria_id, ods_id) 
        values('1','1','1')");

        $sql = "ALTER SEQUENCE convocatorias_sectores_id_seq RESTART WITH 2;";
        $sql .= "TRUNCATE convocatorias_sectores CASCADE;";
        DB::connection()->getPdo()->exec($sql);
        DB::insert("insert into convocatorias_sectores (id, convocatoria_id, sector_id) 
        values('1','1','1')");


        $sql = "ALTER SEQUENCE convocatorias_subsectores_id_seq RESTART WITH 2;";
        $sql .= "TRUNCATE convocatorias_subsectores CASCADE;";
        DB::connection()->getPdo()->exec($sql);
        DB::insert("insert into convocatorias_subsectores (id, convocatoria_id, subsector_id) 
        values('1','1','1')");
    }
}
